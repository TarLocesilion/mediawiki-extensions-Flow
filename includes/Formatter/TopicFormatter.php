<?php

namespace Flow\Formatter;

use Flow\Model\UUID;
use Flow\Model\Workflow;
use Flow\UrlGenerator;
use IContextSource;

class TopicFormatter {
	/**
	 * @var UrlGenerator
	 */
	protected $urlGenerator;

	/**
	 * @var RevisionFormatter
	 */
	protected $serializer;

	public function __construct( UrlGenerator $urlGenerator, RevisionFormatter $serializer ) {
		$this->urlGenerator = $urlGenerator;
		$this->serializer = $serializer;
	}

	public function setContentFormat( $contentFormat, UUID $revisionId = null ) {
		$this->serializer->setContentFormat( $contentFormat, $revisionId );
	}

	public function getEmptyResult( Workflow $workflow ) {
		return array(
			'workflowId' => $workflow->getId()->getAlphadecimal(),
			'type' => 'topic',
			'roots' => array(),
			'posts' => array(),
			'revisions' => array(),
			'links' => array(),
			'actions' => $this->buildApiActions( $workflow ),
		);
	}

	public function formatApi( Workflow $listWorkflow, array $found, IContextSource $ctx ) {
		$roots = $revisions = $posts = $replies = array();
		foreach( $found as $formatterRow ) {
			$serialized = $this->serializer->formatApi( $formatterRow, $ctx );
			if ( !$serialized ) {
				continue;
			}
			$revisions[$serialized['revisionId']] = $serialized;
			$posts[$serialized['postId']][] = $serialized['revisionId'];
			if ( $serialized['replyToId'] ) {
				$replies[$serialized['replyToId']][] = $serialized['postId'];
			} else {
				$roots[] = $serialized['postId'];
			}
		}

		foreach ( $revisions as $i => $serialized ) {
			$alpha = $serialized['postId'];
			$revisions[$i]['replies'] = isset( $replies[$alpha] ) ? $replies[$alpha] : array();
		}

		$alpha = $listWorkflow->getId()->getAlphadecimal();
		$workflows = array( $alpha => $listWorkflow );
		if ( isset( $posts[$alpha] ) ) {
			// Metadata that requires everything to be serialized first
			$metadata = $this->generateTopicMetadata( $posts, $revisions, $workflows, $alpha );
			foreach ( $posts[$alpha] as $revId ) {
				$revisions[$revId] += $metadata;
			}
		}

		return array(
			'roots' => $roots,
			'posts' => $posts,
			'revisions' => $revisions,
		) + $this->getEmptyResult( $listWorkflow );
	}

	protected function buildApiActions( Workflow $workflow ) {
		return array(
			'newtopic' => array(
				'url' => $this->urlGenerator
					->newTopicAction( $workflow->getArticleTitle(), $workflow->getId() )
			),
		);
	}

	/**
	 * @param array $posts Map from alphadecimal postId to list of alphadecimal revisionId's
	 *  for that postId contained within $revisions.
	 * @param array $revisions Map from alphadecimal revisionId to serialized representation
	 *  of that revision.
	 * @param Workflow[] $workflows Map from alphadecimal workflowId to Workflow instance
	 * @param string $postAlphaId PostId of the topic title
	 * @return array
	 */
	protected function generateTopicMetadata( array $posts, array $revisions, array $workflows, $postAlphaId ) {
		$replies = -1;
		$authors = array();
		$stack = new \SplStack;
		$stack->push( $revisions[$posts[$postAlphaId][0]] );
		do {
			$data = $stack->pop();
			$replies++;
			$authors[] = $data['creator']['name'];
			foreach ( $data['replies'] as $postId ) {
				$stack->push( $revisions[$posts[$postId][0]] );
			}
		} while( !$stack->isEmpty() );

		$workflow = isset( $workflows[$postAlphaId] ) ? $workflows[$postAlphaId] : null;

		return array(
			'reply_count' => $replies,
			// ms timestamp
			'last_updated' => $workflow ? $workflow->getLastModifiedObj()->getTimestamp() * 1000 : null,
		);
	}
}
