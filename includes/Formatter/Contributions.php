<?php

namespace Flow\Formatter;

use Flow\Exception\FlowException;
use Flow\Model\Anchor;
use Flow\Model\PostRevision;
use Flow\Parsoid\Utils;
use ChangesList;
use IContextSource;
use Html;

class Contributions extends AbstractFormatter {
	protected function getHistoryType() {
		return 'contributions';
	}

	/**
	 * @param FormatterRow $row With properties workflow, revision, previous_revision
	 * @param IContextSource $ctx
	 * @return string|false HTML for contributions entry, or false on failure
	 * @throws FlowException
	 */
	public function format( FormatterRow $row, IContextSource $ctx ) {
		$this->serializer->setIncludeHistoryProperties( true );
		$data = $this->serializer->formatApi( $row, $ctx, 'contributions' );
		if ( !$data ) {
			return false;
		}

		$charDiff = ChangesList::showCharacterDifference(
			$data['size']['old'],
			$data['size']['new']
		);

		$separator = $this->changeSeparator();

		$links = array();
		$links[] = $this->getDiffAnchor( $data['links'], $ctx );
		$links[] = $this->getHistAnchor( $data['links'], $ctx );

		$description = $this->formatDescription( $data, $ctx );

		// Put it all together
		return
			$this->formatTimestamp( $data ) . ' ' .
			$this->formatAnchorsAsPipeList( $links, $ctx ) .
			$separator .
			$charDiff .
			$separator .
			$this->getTitleLink( $data, $row, $ctx ) .
			( Utils::htmlToPlaintext( $description ) ? $separator . $description : '' ) .
			$this->getHideUnhide( $data, $row, $ctx );
	}

	/**
	 * @todo can be generic?
	 */
	protected function getHideUnhide( array $data, FormatterRow $row, IContextSource $ctx ) {
		if ( !$row->revision instanceof PostRevision ) {
			return '';
		}

		$type = $row->revision->isTopicTitle() ? 'topic' : 'post';

		if ( isset( $data['actions']['hide'] ) ) {
			$key = 'hide';
			// flow-post-action-hide-post, flow-post-action-hide-topic
			$msg = "flow-$type-action-hide-$type";
		} elseif ( isset( $data['actions']['unhide'] ) ) {
			$key = 'unhide';
			// flow-topic-action-restore-topic, flow-post-action-restore-post
			$msg = "flow-$type-action-restore-$type";
		} else {
			return '';
		}

		/** @var Anchor $anchor */
		$anchor = $data['actions'][$key];

		return ' (' . Html::rawElement(
			'a',
			array(
				'href' => $anchor->getFullURL(),
				'data-flow-interactive-handler' => 'moderationDialog',
				'data-flow-template' => "flow_moderate_$type.partial",
				'data-role' => $key,
				'class' => 'flow-history-moderation-action flow-click-interactive',
			),
			$ctx->msg( $msg )->escaped()
		) . ')';
	}
}
