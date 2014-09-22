When(/^I click Hide comment button$/) do
  on(FlowPage).actions_link_hide_3rd_comment_element.click
end

When(/^I click the Hide button in the dialog$/) do
  on(FlowPage).dialog_submit_element.click
end

Then(/^the 3rd comment should be marked as hidden$/) do
  step 'the page has re-rendered'
  on(FlowPage).third_reply_element.class_name.should match /flow-post-moderated/
  on(FlowPage).third_reply_moderation_msg.should match( 'This comment was hidden' )
end

Then (/^the content of the 3rd comment should not be visible$/) do
  on(FlowPage).third_reply_content_element.should_not be_visible
end
