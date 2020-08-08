<?php

namespace App\Sender;

use App\Definition;

class DingTalk extends AbstractSender
{
    public function send()
    {
        $at = getOption(Definition::KEY_DING_TALK_ACCESS_TOKEN, null);
        $kw = getOption(Definition::KEY_DING_TALK_KEYWORD, null);
        if (empty($at) || empty($kw)) {
            return;
        }

        $content = "[{$this->title}] \n {$this->content}";

        $webhook = "https://oapi.dingtalk.com/robot/send?access_token={$at}";
        $data = ['msgtype' => 'text','text' => ['content' => "[{$kw}] {$content}"]];
        $body = json_encode($data);
        requestByCurl($webhook, $body, ['Content-Type: application/json;charset=utf-8']);
    }
}
