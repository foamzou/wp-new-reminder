<?php


namespace App\Event;


use App\Definition;

class NewComments extends AbstractEvent
{
    public function run($commentId)
    {
        if (!$this->shouldTrigger(Definition::EVENT_NEW_COMMENTS)) {
            return;
        }
        $comment = get_comment($commentId);
        if (empty($comment)) {
            return;
        }

        $commentPostId = $comment->comment_post_ID;
        $pageLink = get_permalink($commentPostId) . "#comment-" . $commentId;
        $content = $comment->comment_content . "\n 点击查看: {$pageLink}";
        $title = " 「" . wp_trim_words(get_post_title_by_id($commentPostId), 20) . "」 有新的评论消息";

        $this->notify($title, $content);
    }
}
