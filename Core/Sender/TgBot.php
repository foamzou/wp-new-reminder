<?php

namespace App\Sender;

use App\Definition;

class TgBot extends AbstractSender
{
    public function send()
    {
        $chatId = getOption(Definition::KEY_TGBOT_CHAT_ID, null);
        $token = getOption(Definition::KEY_TGBOT_TOKEN, null);
        if (empty($chatId) || empty($token)) {
            return;
        }
        $content = "[{$this->title}] \n {$this->content}";

        $api = "https://api.telegram.org/bot{$token}/sendMessage";
        $data = [
            'chat_id' => $chatId,
            'text' => $content,
            'parse_mode' => 'Markdown'
        ];
        $body = json_encode($data);
        requestByCurl($api, $body, ['Content-Type: application/json;charset=utf-8']);
    }
}
