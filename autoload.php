<?php

$wgAutoloadClasses['ApiFlow'] = __DIR__ . '/includes/api/ApiFlow.php';
$wgAutoloadClasses['ApiFlowBase'] = __DIR__ . '/includes/api/ApiFlowBase.php';
$wgAutoloadClasses['ApiFlowBaseGet'] = __DIR__ . '/includes/api/ApiFlowBaseGet.php';
$wgAutoloadClasses['ApiFlowBasePost'] = __DIR__ . '/includes/api/ApiFlowBasePost.php';
$wgAutoloadClasses['ApiFlowEditHeader'] = __DIR__ . '/includes/api/ApiFlowEditHeader.php';
$wgAutoloadClasses['ApiFlowEditPost'] = __DIR__ . '/includes/api/ApiFlowEditPost.php';
$wgAutoloadClasses['ApiFlowEditTitle'] = __DIR__ . '/includes/api/ApiFlowEditTitle.php';
$wgAutoloadClasses['ApiFlowEditTopicSummary'] = __DIR__ . '/includes/api/ApiFlowEditTopicSummary.php';
$wgAutoloadClasses['ApiFlowLockTopic'] = __DIR__ . '/includes/api/ApiFlowLockTopic.php';
$wgAutoloadClasses['ApiFlowModeratePost'] = __DIR__ . '/includes/api/ApiFlowModeratePost.php';
$wgAutoloadClasses['ApiFlowModerateTopic'] = __DIR__ . '/includes/api/ApiFlowModerateTopic.php';
$wgAutoloadClasses['ApiFlowNewTopic'] = __DIR__ . '/includes/api/ApiFlowNewTopic.php';
$wgAutoloadClasses['ApiFlowReply'] = __DIR__ . '/includes/api/ApiFlowReply.php';
$wgAutoloadClasses['ApiFlowViewHeader'] = __DIR__ . '/includes/api/ApiFlowViewHeader.php';
$wgAutoloadClasses['ApiFlowViewPost'] = __DIR__ . '/includes/api/ApiFlowViewPost.php';
$wgAutoloadClasses['ApiFlowViewTopic'] = __DIR__ . '/includes/api/ApiFlowViewTopic.php';
$wgAutoloadClasses['ApiFlowViewTopicList'] = __DIR__ . '/includes/api/ApiFlowViewTopicList.php';
$wgAutoloadClasses['ApiFlowViewTopicSummary'] = __DIR__ . '/includes/api/ApiFlowViewTopicSummary.php';
$wgAutoloadClasses['ApiParsoidUtilsFlow'] = __DIR__ . '/includes/api/ApiParsoidUtilsFlow.php';
$wgAutoloadClasses['ApiQueryFlow'] = __DIR__ . '/includes/api/ApiQueryFlow.php';
$wgAutoloadClasses['ApiQueryPropFlowInfo'] = __DIR__ . '/includes/api/ApiQueryPropFlowInfo.php';
$wgAutoloadClasses['FlowHooks'] = __DIR__ . '/Hooks.php';
$wgAutoloadClasses['Flow\\Actions\\CompareHeaderRevisionsAction'] = __DIR__ . '/includes/Actions/CompareHeaderRevisionsAction.php';
$wgAutoloadClasses['Flow\\Actions\\ComparePostRevisionsAction'] = __DIR__ . '/includes/Actions/ComparePostRevisionsAction.php';
$wgAutoloadClasses['Flow\\Actions\\ComparePostSummaryRevisionsAction'] = __DIR__ . '/includes/Actions/ComparePostSummaryRevisionsAction.php';
$wgAutoloadClasses['Flow\\Actions\\CreateTopicSummaryAction'] = __DIR__ . '/includes/Actions/CreateTopicSummaryAction.php';
$wgAutoloadClasses['Flow\\Actions\\EditAction'] = __DIR__ . '/includes/Actions/EditAction.php';
$wgAutoloadClasses['Flow\\Actions\\EditHeaderAction'] = __DIR__ . '/includes/Actions/EditHeaderAction.php';
$wgAutoloadClasses['Flow\\Actions\\EditPostAction'] = __DIR__ . '/includes/Actions/EditPostAction.php';
$wgAutoloadClasses['Flow\\Actions\\EditTitleAction'] = __DIR__ . '/includes/Actions/EditTitleAction.php';
$wgAutoloadClasses['Flow\\Actions\\EditTopicSummaryAction'] = __DIR__ . '/includes/Actions/EditTopicSummaryAction.php';
$wgAutoloadClasses['Flow\\Actions\\FlowAction'] = __DIR__ . '/includes/Actions/Action.php';
$wgAutoloadClasses['Flow\\Actions\\HistoryAction'] = __DIR__ . '/includes/Actions/HistoryAction.php';
$wgAutoloadClasses['Flow\\Actions\\LockTopicAction'] = __DIR__ . '/includes/Actions/LockTopicAction.php';
$wgAutoloadClasses['Flow\\Actions\\ModeratePostAction'] = __DIR__ . '/includes/Actions/ModeratePostAction.php';
$wgAutoloadClasses['Flow\\Actions\\ModerateTopicAction'] = __DIR__ . '/includes/Actions/ModerateTopicAction.php';
$wgAutoloadClasses['Flow\\Actions\\NewTopicAction'] = __DIR__ . '/includes/Actions/NewTopicAction.php';
$wgAutoloadClasses['Flow\\Actions\\PostSingleViewAction'] = __DIR__ . '/includes/Actions/PostSingleViewAction.php';
$wgAutoloadClasses['Flow\\Actions\\ReplyAction'] = __DIR__ . '/includes/Actions/ReplyAction.php';
$wgAutoloadClasses['Flow\\Actions\\RestorePostAction'] = __DIR__ . '/includes/Actions/RestorePostAction.php';
$wgAutoloadClasses['Flow\\Actions\\RestoreTopicAction'] = __DIR__ . '/includes/Actions/RestoreTopicAction.php';
$wgAutoloadClasses['Flow\\Actions\\ViewAction'] = __DIR__ . '/includes/Actions/ViewAction.php';
$wgAutoloadClasses['Flow\\Actions\\ViewHeaderAction'] = __DIR__ . '/includes/Actions/ViewHeaderAction.php';
$wgAutoloadClasses['Flow\\Actions\\ViewTopicSummaryAction'] = __DIR__ . '/includes/Actions/ViewTopicSummaryAction.php';
$wgAutoloadClasses['Flow\\BaseUrlGenerator'] = __DIR__ . '/includes/BaseUrlGenerator.php';
$wgAutoloadClasses['Flow\\BlockFactory'] = __DIR__ . '/includes/BlockFactory.php';
$wgAutoloadClasses['Flow\\Block\\AbstractBlock'] = __DIR__ . '/includes/Block/Block.php';
$wgAutoloadClasses['Flow\\Block\\Block'] = __DIR__ . '/includes/Block/Block.php';
$wgAutoloadClasses['Flow\\Block\\BoardHistoryBlock'] = __DIR__ . '/includes/Block/BoardHistory.php';
$wgAutoloadClasses['Flow\\Block\\HeaderBlock'] = __DIR__ . '/includes/Block/Header.php';
$wgAutoloadClasses['Flow\\Block\\TopicBlock'] = __DIR__ . '/includes/Block/Topic.php';
$wgAutoloadClasses['Flow\\Block\\TopicListBlock'] = __DIR__ . '/includes/Block/TopicList.php';
$wgAutoloadClasses['Flow\\Block\\TopicSummaryBlock'] = __DIR__ . '/includes/Block/TopicSummary.php';
$wgAutoloadClasses['Flow\\CatchableFatalErrorException'] = __DIR__ . '/includes/CatchableFatalErrorException.php';
$wgAutoloadClasses['Flow\\Collection\\AbstractCollection'] = __DIR__ . '/includes/Collection/AbstractCollection.php';
$wgAutoloadClasses['Flow\\Collection\\CollectionCache'] = __DIR__ . '/includes/Collection/CollectionCache.php';
$wgAutoloadClasses['Flow\\Collection\\HeaderCollection'] = __DIR__ . '/includes/Collection/HeaderCollection.php';
$wgAutoloadClasses['Flow\\Collection\\LocalCacheAbstractCollection'] = __DIR__ . '/includes/Collection/LocalCacheAbstractCollection.php';
$wgAutoloadClasses['Flow\\Collection\\PostCollection'] = __DIR__ . '/includes/Collection/PostCollection.php';
$wgAutoloadClasses['Flow\\Collection\\PostSummaryCollection'] = __DIR__ . '/includes/Collection/PostSummaryCollection.php';
$wgAutoloadClasses['Flow\\Container'] = __DIR__ . '/includes/Container.php';
$wgAutoloadClasses['Flow\\Content\\BoardContent'] = __DIR__ . '/includes/Content/BoardContent.php';
$wgAutoloadClasses['Flow\\Content\\BoardContentHandler'] = __DIR__ . '/includes/Content/BoardContentHandler.php';
$wgAutoloadClasses['Flow\\Content\\Content'] = __DIR__ . '/includes/Content/Content.php';
$wgAutoloadClasses['Flow\\Data\\BufferedCache'] = __DIR__ . '/includes/Data/BufferedCache.php';
$wgAutoloadClasses['Flow\\Data\\Compactor'] = __DIR__ . '/includes/Data/Compactor.php';
$wgAutoloadClasses['Flow\\Data\\Compactor\\FeatureCompactor'] = __DIR__ . '/includes/Data/Compactor/FeatureCompactor.php';
$wgAutoloadClasses['Flow\\Data\\Compactor\\ShallowCompactor'] = __DIR__ . '/includes/Data/Compactor/ShallowCompactor.php';
$wgAutoloadClasses['Flow\\Data\\Index'] = __DIR__ . '/includes/Data/Index.php';
$wgAutoloadClasses['Flow\\Data\\Index\\BoardHistoryIndex'] = __DIR__ . '/includes/Data/Index/BoardHistoryIndex.php';
$wgAutoloadClasses['Flow\\Data\\Index\\FeatureIndex'] = __DIR__ . '/includes/Data/Index/FeatureIndex.php';
$wgAutoloadClasses['Flow\\Data\\Index\\TopKIndex'] = __DIR__ . '/includes/Data/Index/TopKIndex.php';
$wgAutoloadClasses['Flow\\Data\\Index\\TopicHistoryIndex'] = __DIR__ . '/includes/Data/Index/TopicHistoryIndex.php';
$wgAutoloadClasses['Flow\\Data\\Index\\UniqueFeatureIndex'] = __DIR__ . '/includes/Data/Index/UniqueFeatureIndex.php';
$wgAutoloadClasses['Flow\\Data\\LifecycleHandler'] = __DIR__ . '/includes/Data/LifecycleHandler.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\AbstractTopicInsertListener'] = __DIR__ . '/includes/Data/Listener/WatchTopicListener.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\DeferredInsertLifecycleHandler'] = __DIR__ . '/includes/Data/Listener/DeferredInsertLifecycleHandler.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\ImmediateWatchTopicListener'] = __DIR__ . '/includes/Data/Listener/WatchTopicListener.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\NotificationListener'] = __DIR__ . '/includes/Data/Listener/NotificationListener.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\OccupationListener'] = __DIR__ . '/includes/Data/Listener/OccupationListener.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\ReferenceRecorder'] = __DIR__ . '/includes/Data/Listener/ReferenceRecorder.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\UrlGenerationListener'] = __DIR__ . '/includes/Data/Listener/UrlGenerationListener.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\UserNameListener'] = __DIR__ . '/includes/Data/Listener/UserNameListener.php';
$wgAutoloadClasses['Flow\\Data\\Listener\\WorkflowTopicListListener'] = __DIR__ . '/includes/Data/Listener/WorkflowTopicListListener.php';
$wgAutoloadClasses['Flow\\Data\\ManagerGroup'] = __DIR__ . '/includes/Data/ManagerGroup.php';
$wgAutoloadClasses['Flow\\Data\\Mapper\\BasicObjectMapper'] = __DIR__ . '/includes/Data/Mapper/BasicObjectMapper.php';
$wgAutoloadClasses['Flow\\Data\\Mapper\\CachingObjectMapper'] = __DIR__ . '/includes/Data/Mapper/CachingObjectMapper.php';
$wgAutoloadClasses['Flow\\Data\\ObjectLocator'] = __DIR__ . '/includes/Data/ObjectLocator.php';
$wgAutoloadClasses['Flow\\Data\\ObjectManager'] = __DIR__ . '/includes/Data/ObjectManager.php';
$wgAutoloadClasses['Flow\\Data\\ObjectMapper'] = __DIR__ . '/includes/Data/ObjectMapper.php';
$wgAutoloadClasses['Flow\\Data\\ObjectStorage'] = __DIR__ . '/includes/Data/ObjectStorage.php';
$wgAutoloadClasses['Flow\\Data\\Pager\\Pager'] = __DIR__ . '/includes/Data/Pager/Pager.php';
$wgAutoloadClasses['Flow\\Data\\Pager\\PagerPage'] = __DIR__ . '/includes/Data/Pager/PagerPage.php';
$wgAutoloadClasses['Flow\\Data\\RecentChanges\\HeaderRecentChanges'] = __DIR__ . '/includes/Data/RecentChanges/HeaderRecentChanges.php';
$wgAutoloadClasses['Flow\\Data\\RecentChanges\\PostRevisionRecentChanges'] = __DIR__ . '/includes/Data/RecentChanges/PostRevisionRecentChanges.php';
$wgAutoloadClasses['Flow\\Data\\RecentChanges\\PostSummaryRecentChanges'] = __DIR__ . '/includes/Data/RecentChanges/PostSummaryRecentChanges.php';
$wgAutoloadClasses['Flow\\Data\\RecentChanges\\RecentChanges'] = __DIR__ . '/includes/Data/RecentChanges/RecentChanges.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\BasicDbStorage'] = __DIR__ . '/includes/Data/Storage/BasicDbStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\BoardHistoryStorage'] = __DIR__ . '/includes/Data/Storage/BoardHistoryStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\DbStorage'] = __DIR__ . '/includes/Data/Storage/DbStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\HeaderRevisionStorage'] = __DIR__ . '/includes/Data/Storage/HeaderRevisionStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\PostRevisionStorage'] = __DIR__ . '/includes/Data/Storage/PostRevisionStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\PostSummaryRevisionStorage'] = __DIR__ . '/includes/Data/Storage/PostSummaryRevisionStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\RevisionStorage'] = __DIR__ . '/includes/Data/Storage/RevisionStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\TopicHistoryStorage'] = __DIR__ . '/includes/Data/Storage/TopicHistoryStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\TopicListLastUpdatedStorage'] = __DIR__ . '/includes/Data/Storage/TopicListLastUpdatedStorage.php';
$wgAutoloadClasses['Flow\\Data\\Storage\\TopicListStorage'] = __DIR__ . '/includes/Data/Storage/TopicListStorage.php';
$wgAutoloadClasses['Flow\\Data\\Utils\\LocalBufferedCache'] = __DIR__ . '/includes/Data/Utils/LocalBufferedCache.php';
$wgAutoloadClasses['Flow\\Data\\Utils\\Merger'] = __DIR__ . '/includes/Data/Utils/Merger.php';
$wgAutoloadClasses['Flow\\Data\\Utils\\MultiDimArray'] = __DIR__ . '/includes/Data/Utils/MultiDimArray.php';
$wgAutoloadClasses['Flow\\Data\\Utils\\RawSql'] = __DIR__ . '/includes/Data/Utils/RawSql.php';
$wgAutoloadClasses['Flow\\Data\\Utils\\ResultDuplicator'] = __DIR__ . '/includes/Data/Utils/ResultDuplicator.php';
$wgAutoloadClasses['Flow\\Data\\Utils\\SortArrayByKeys'] = __DIR__ . '/includes/Data/Utils/SortArrayByKeys.php';
$wgAutoloadClasses['Flow\\DbFactory'] = __DIR__ . '/includes/DbFactory.php';
$wgAutoloadClasses['Flow\\Exception\\CrossWikiException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\DataModelException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\DataPersistenceException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\FailCommitException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\FlowException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\InvalidActionException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\InvalidDataException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\InvalidInputException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\NoIndexException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\PermissionException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\WikitextException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\Exception\\WrongNumberArgumentsException'] = __DIR__ . '/includes/Exception/ExceptionHandling.php';
$wgAutoloadClasses['Flow\\FlowActions'] = __DIR__ . '/includes/FlowActions.php';
$wgAutoloadClasses['Flow\\Formatter\\AbstractFormatter'] = __DIR__ . '/includes/Formatter/AbstractFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\AbstractQuery'] = __DIR__ . '/includes/Formatter/AbstractQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\BoardHistoryQuery'] = __DIR__ . '/includes/Formatter/BoardHistoryQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\CheckUserFormatter'] = __DIR__ . '/includes/Formatter/CheckUserFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\CheckUserQuery'] = __DIR__ . '/includes/Formatter/CheckUserQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\CheckUserRow'] = __DIR__ . '/includes/Formatter/CheckUserQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\Contributions'] = __DIR__ . '/includes/Formatter/Contributions.php';
$wgAutoloadClasses['Flow\\Formatter\\ContributionsQuery'] = __DIR__ . '/includes/Formatter/ContributionsQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\ContributionsRow'] = __DIR__ . '/includes/Formatter/ContributionsQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\FormatterRow'] = __DIR__ . '/includes/Formatter/AbstractQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\HeaderViewQuery'] = __DIR__ . '/includes/Formatter/RevisionViewQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\IRCLineUrlFormatter'] = __DIR__ . '/includes/Formatter/IRCLineUrlFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\PostHistoryQuery'] = __DIR__ . '/includes/Formatter/PostHistoryQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\PostSummaryQuery'] = __DIR__ . '/includes/Formatter/PostSummaryQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\PostSummaryViewQuery'] = __DIR__ . '/includes/Formatter/RevisionViewQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\PostViewQuery'] = __DIR__ . '/includes/Formatter/RevisionViewQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\RecentChanges'] = __DIR__ . '/includes/Formatter/RecentChanges.php';
$wgAutoloadClasses['Flow\\Formatter\\RecentChangesQuery'] = __DIR__ . '/includes/Formatter/RecentChangesQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\RecentChangesRow'] = __DIR__ . '/includes/Formatter/RecentChangesQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\RevisionDiffViewFormatter'] = __DIR__ . '/includes/Formatter/RevisionViewFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\RevisionFormatter'] = __DIR__ . '/includes/Formatter/RevisionFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\RevisionViewFormatter'] = __DIR__ . '/includes/Formatter/RevisionViewFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\RevisionViewQuery'] = __DIR__ . '/includes/Formatter/RevisionViewQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\RevisionViewRow'] = __DIR__ . '/includes/Formatter/RevisionViewRow.php';
$wgAutoloadClasses['Flow\\Formatter\\SinglePostQuery'] = __DIR__ . '/includes/Formatter/SinglePostQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\TopicFormatter'] = __DIR__ . '/includes/Formatter/TopicFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\TopicHistoryQuery'] = __DIR__ . '/includes/Formatter/TopicHistoryQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\TopicListFormatter'] = __DIR__ . '/includes/Formatter/TopicListFormatter.php';
$wgAutoloadClasses['Flow\\Formatter\\TopicListQuery'] = __DIR__ . '/includes/Formatter/TopicListQuery.php';
$wgAutoloadClasses['Flow\\Formatter\\TopicRow'] = __DIR__ . '/includes/Formatter/TopicRow.php';
$wgAutoloadClasses['Flow\\LinksTableUpdater'] = __DIR__ . '/includes/LinksTableUpdater.php';
$wgAutoloadClasses['Flow\\Log\\Formatter'] = __DIR__ . '/includes/Log/Formatter.php';
$wgAutoloadClasses['Flow\\Log\\Logger'] = __DIR__ . '/includes/Log/Logger.php';
$wgAutoloadClasses['Flow\\Log\\PostModerationLogger'] = __DIR__ . '/includes/Log/PostModerationLogger.php';
$wgAutoloadClasses['Flow\\Model\\AbstractRevision'] = __DIR__ . '/includes/Model/AbstractRevision.php';
$wgAutoloadClasses['Flow\\Model\\AbstractSummary'] = __DIR__ . '/includes/Model/AbstractSummary.php';
$wgAutoloadClasses['Flow\\Model\\Anchor'] = __DIR__ . '/includes/Model/Anchor.php';
$wgAutoloadClasses['Flow\\Model\\Header'] = __DIR__ . '/includes/Model/Header.php';
$wgAutoloadClasses['Flow\\Model\\PostRevision'] = __DIR__ . '/includes/Model/PostRevision.php';
$wgAutoloadClasses['Flow\\Model\\PostSummary'] = __DIR__ . '/includes/Model/PostSummary.php';
$wgAutoloadClasses['Flow\\Model\\Reference'] = __DIR__ . '/includes/Model/Reference.php';
$wgAutoloadClasses['Flow\\Model\\TopicListEntry'] = __DIR__ . '/includes/Model/TopicListEntry.php';
$wgAutoloadClasses['Flow\\Model\\URLReference'] = __DIR__ . '/includes/Model/Reference.php';
$wgAutoloadClasses['Flow\\Model\\UUID'] = __DIR__ . '/includes/Model/UUID.php';
$wgAutoloadClasses['Flow\\Model\\UserTuple'] = __DIR__ . '/includes/Model/UserTuple.php';
$wgAutoloadClasses['Flow\\Model\\WikiReference'] = __DIR__ . '/includes/Model/Reference.php';
$wgAutoloadClasses['Flow\\Model\\Workflow'] = __DIR__ . '/includes/Model/Workflow.php';
$wgAutoloadClasses['Flow\\NewTopicFormatter'] = __DIR__ . '/includes/Notifications/Formatter.php';
$wgAutoloadClasses['Flow\\NotificationController'] = __DIR__ . '/includes/Notifications/Controller.php';
$wgAutoloadClasses['Flow\\NotificationFormatter'] = __DIR__ . '/includes/Notifications/Formatter.php';
$wgAutoloadClasses['Flow\\NotificationsUserLocator'] = __DIR__ . '/includes/Notifications/UserLocator.php';
$wgAutoloadClasses['Flow\\OccupationController'] = __DIR__ . '/includes/TalkpageManager.php';
$wgAutoloadClasses['Flow\\OutputPage'] = __DIR__ . '/includes/OutputPage.php';
$wgAutoloadClasses['Flow\\Parsoid\\BadImageRemover'] = __DIR__ . '/includes/Parsoid/BadImageRemover.php';
$wgAutoloadClasses['Flow\\Parsoid\\ContentFixer'] = __DIR__ . '/includes/Parsoid/ContentFixer.php';
$wgAutoloadClasses['Flow\\Parsoid\\Controller'] = __DIR__ . '/includes/Parsoid/Controller.php';
$wgAutoloadClasses['Flow\\Parsoid\\ExtractorInterface'] = __DIR__ . '/includes/Parsoid/ExtractorInterface.php';
$wgAutoloadClasses['Flow\\Parsoid\\Extractor\\ExtLinkExtractor'] = __DIR__ . '/includes/Parsoid/Extractor/ExtLinkExtractor.php';
$wgAutoloadClasses['Flow\\Parsoid\\Extractor\\ImageExtractor'] = __DIR__ . '/includes/Parsoid/Extractor/ImageExtractor.php';
$wgAutoloadClasses['Flow\\Parsoid\\Extractor\\PlaceholderExtractor'] = __DIR__ . '/includes/Parsoid/Extractor/PlaceholderExtractor.php';
$wgAutoloadClasses['Flow\\Parsoid\\Extractor\\TransclusionExtractor'] = __DIR__ . '/includes/Parsoid/Extractor/TransclusionExtractor.php';
$wgAutoloadClasses['Flow\\Parsoid\\Extractor\\WikiLinkExtractor'] = __DIR__ . '/includes/Parsoid/Extractor/WikiLinkExtractor.php';
$wgAutoloadClasses['Flow\\Parsoid\\NoParsoidException'] = __DIR__ . '/includes/Parsoid/Utils.php';
$wgAutoloadClasses['Flow\\Parsoid\\Redlinker'] = __DIR__ . '/includes/Parsoid/Redlinker.php';
$wgAutoloadClasses['Flow\\Parsoid\\ReferenceExtractor'] = __DIR__ . '/includes/Parsoid/ReferenceExtractor.php';
$wgAutoloadClasses['Flow\\Parsoid\\ReferenceFactory'] = __DIR__ . '/includes/Parsoid/ReferenceFactory.php';
$wgAutoloadClasses['Flow\\Parsoid\\Utils'] = __DIR__ . '/includes/Parsoid/Utils.php';
$wgAutoloadClasses['Flow\\RecoverableErrorHandler'] = __DIR__ . '/includes/RecoverableErrorHandler.php';
$wgAutoloadClasses['Flow\\ReferenceClarifier'] = __DIR__ . '/includes/ReferenceClarifier.php';
$wgAutoloadClasses['Flow\\Repository\\MultiGetList'] = __DIR__ . '/includes/Repository/MultiGetList.php';
$wgAutoloadClasses['Flow\\Repository\\RootPostLoader'] = __DIR__ . '/includes/Repository/RootPostLoader.php';
$wgAutoloadClasses['Flow\\Repository\\TreeRepository'] = __DIR__ . '/includes/Repository/TreeRepository.php';
$wgAutoloadClasses['Flow\\Repository\\UserNameBatch'] = __DIR__ . '/includes/Repository/UserNameBatch.php';
$wgAutoloadClasses['Flow\\Repository\\UserName\\OneStepUserNameQuery'] = __DIR__ . '/includes/Repository/UserName/OneStepUserNameQuery.php';
$wgAutoloadClasses['Flow\\Repository\\UserName\\TwoStepUserNameQuery'] = __DIR__ . '/includes/Repository/UserName/TwoStepUserNameQuery.php';
$wgAutoloadClasses['Flow\\Repository\\UserName\\UserNameQuery'] = __DIR__ . '/includes/Repository/UserName/UserNameQuery.php';
$wgAutoloadClasses['Flow\\RevisionActionPermissions'] = __DIR__ . '/includes/RevisionActionPermissions.php';
$wgAutoloadClasses['Flow\\SpamFilter\\AbuseFilter'] = __DIR__ . '/includes/SpamFilter/AbuseFilter.php';
$wgAutoloadClasses['Flow\\SpamFilter\\ConfirmEdit'] = __DIR__ . '/includes/SpamFilter/ConfirmEdit.php';
$wgAutoloadClasses['Flow\\SpamFilter\\ContentLengthFilter'] = __DIR__ . '/includes/SpamFilter/ContentLengthFilter.php';
$wgAutoloadClasses['Flow\\SpamFilter\\Controller'] = __DIR__ . '/includes/SpamFilter/Controller.php';
$wgAutoloadClasses['Flow\\SpamFilter\\SpamBlacklist'] = __DIR__ . '/includes/SpamFilter/SpamBlacklist.php';
$wgAutoloadClasses['Flow\\SpamFilter\\SpamFilter'] = __DIR__ . '/includes/SpamFilter/SpamFilter.php';
$wgAutoloadClasses['Flow\\SpamFilter\\SpamRegex'] = __DIR__ . '/includes/SpamFilter/SpamRegex.php';
$wgAutoloadClasses['Flow\\SpecialFlow'] = __DIR__ . '/includes/SpecialFlow.php';
$wgAutoloadClasses['Flow\\SubmissionHandler'] = __DIR__ . '/includes/SubmissionHandler.php';
$wgAutoloadClasses['Flow\\TalkpageManager'] = __DIR__ . '/includes/TalkpageManager.php';
$wgAutoloadClasses['Flow\\TemplateHelper'] = __DIR__ . '/includes/TemplateHelper.php';
$wgAutoloadClasses['Flow\\Templating'] = __DIR__ . '/includes/Templating.php';
$wgAutoloadClasses['Flow\\Tests\\BlockFactoryTest'] = __DIR__ . '/tests/phpunit/BlockFactoryTest.php';
$wgAutoloadClasses['Flow\\Tests\\Collection\\PostCollectionTest'] = __DIR__ . '/tests/phpunit/Collection/PostCollectionTest.php';
$wgAutoloadClasses['Flow\\Tests\\Collection\\RevisionCollectionPermissionsTest'] = __DIR__ . '/tests/phpunit/Collection/RevisionCollectionPermissionsTest.php';
$wgAutoloadClasses['Flow\\Tests\\ContainerTest'] = __DIR__ . '/tests/phpunit/ContainerTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\CachingObjectManagerTest'] = __DIR__ . '/tests/phpunit/Data/CachingObjectMapperTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\FlowNothingTest'] = __DIR__ . '/tests/phpunit/Data/NothingTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\IndexTest'] = __DIR__ . '/tests/phpunit/Data/IndexTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\ObjectLocatorTest'] = __DIR__ . '/tests/phpunit/Data/ObjectLocatorTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\RevisionStorageTest'] = __DIR__ . '/tests/phpunit/Data/RevisionStorageTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\UserNameBatchTest'] = __DIR__ . '/tests/phpunit/Data/UserNameBatchTest.php';
$wgAutoloadClasses['Flow\\Tests\\Data\\UserNameListenerTest'] = __DIR__ . '/tests/phpunit/Data/UserNameListenerTest.php';
$wgAutoloadClasses['Flow\\Tests\\FlowTestCase'] = __DIR__ . '/tests/phpunit/FlowTestCase.php';
$wgAutoloadClasses['Flow\\Tests\\Formatter\\FormatterTest'] = __DIR__ . '/tests/phpunit/Formatter/FormatterTest.php';
$wgAutoloadClasses['Flow\\Tests\\HookTest'] = __DIR__ . '/tests/phpunit/HookTest.php';
$wgAutoloadClasses['Flow\\Tests\\LinksTableTest'] = __DIR__ . '/tests/phpunit/LinksTableTest.php';
$wgAutoloadClasses['Flow\\Tests\\Model\\PostRevisionTest'] = __DIR__ . '/tests/phpunit/Model/PostRevisionTest.php';
$wgAutoloadClasses['Flow\\Tests\\Model\\UUIDTest'] = __DIR__ . '/tests/phpunit/Model/UUIDTest.php';
$wgAutoloadClasses['Flow\\Tests\\NotifiedUsersTest'] = __DIR__ . '/tests/phpunit/Notifications/NotifiedUsersTest.php';
$wgAutoloadClasses['Flow\\Tests\\PagerTest'] = __DIR__ . '/tests/phpunit/PagerTest.php';
$wgAutoloadClasses['Flow\\Tests\\Parsoid\\MethodReturnsConstraint'] = __DIR__ . '/tests/phpunit/Parsoid/RedlinkerTest.php';
$wgAutoloadClasses['Flow\\Tests\\Parsoid\\ParsoidUtilsTest'] = __DIR__ . '/tests/phpunit/Parsoid/UtilsTest.php';
$wgAutoloadClasses['Flow\\Tests\\Parsoid\\RedlinkerTest'] = __DIR__ . '/tests/phpunit/Parsoid/RedlinkerTest.php';
$wgAutoloadClasses['Flow\\Tests\\Parsoid\\ReferenceExtractorTestCase'] = __DIR__ . '/tests/phpunit/Parsoid/ReferenceExtractorTest.php';
$wgAutoloadClasses['Flow\\Tests\\PermissionsTest'] = __DIR__ . '/tests/phpunit/PermissionsTest.php';
$wgAutoloadClasses['Flow\\Tests\\PostRevisionTestCase'] = __DIR__ . '/tests/phpunit/PostRevisionTestCase.php';
$wgAutoloadClasses['Flow\\Tests\\Repository\\TreeRepositoryTest'] = __DIR__ . '/tests/phpunit/Repository/TreeRepositoryTest.php';
$wgAutoloadClasses['Flow\\Tests\\SpamFilter\\AbuseFilterTest'] = __DIR__ . '/tests/phpunit/SpamFilter/AbuseFilterTest.php';
$wgAutoloadClasses['Flow\\Tests\\SpamFilter\\SpamBlacklistTest'] = __DIR__ . '/tests/phpunit/SpamFilter/SpamBlacklistTest.php';
$wgAutoloadClasses['Flow\\Tests\\SpamFilter\\SpamRegexTest'] = __DIR__ . '/tests/phpunit/SpamFilter/SpamRegexTest.php';
$wgAutoloadClasses['Flow\\Tests\\TemplateHelperTest'] = __DIR__ . '/tests/phpunit/TemplateHelperTest.php';
$wgAutoloadClasses['Flow\\Tests\\UrlGeneratorTest'] = __DIR__ . '/tests/phpunit/UrlGeneratorTest.php';
$wgAutoloadClasses['Flow\\Tests\\WatchedTopicItemTest'] = __DIR__ . '/tests/phpunit/WatchedTopicItemsTest.php';
$wgAutoloadClasses['Flow\\UrlGenerator'] = __DIR__ . '/includes/UrlGenerator.php';
$wgAutoloadClasses['Flow\\View'] = __DIR__ . '/includes/View.php';
$wgAutoloadClasses['Flow\\WatchedTopicItems'] = __DIR__ . '/includes/WatchedTopicItems.php';
$wgAutoloadClasses['Flow\\WorkflowLoader'] = __DIR__ . '/includes/WorkflowLoader.php';
$wgAutoloadClasses['Flow\\WorkflowLoaderFactory'] = __DIR__ . '/includes/WorkflowLoaderFactory.php';
$wgAutoloadClasses['LCRun3'] = __DIR__ . '/vendor/lightncandy.php';
$wgAutoloadClasses['LightnCandy'] = __DIR__ . '/vendor/lightncandy.php';
$wgAutoloadClasses['Pimple'] = __DIR__ . '/vendor/Pimple.php';