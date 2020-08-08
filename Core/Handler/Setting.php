<?php


namespace App\Handler;


use App\Definition;

class Setting
{
    public function save($request)
    {
        $list = [
            Definition::KEY_NOTIFY_TYPE,
            Definition::KEY_DING_TALK_ACCESS_TOKEN,
            Definition::KEY_DING_TALK_KEYWORD,
            Definition::KEY_TGBOT_CHAT_ID,
            Definition::KEY_TGBOT_TOKEN,
            Definition::KEY_CUSTOM_LINK,
        ];
        foreach ($list as $key) {
            if (isset($request[$key])) {
                setOption($key, $request[$key]);
            }
        }

        // 是否勾选
        setOption(Definition::EVENT_NEW_COMMENTS, isset($request[Definition::EVENT_NEW_COMMENTS]));
    }

}
