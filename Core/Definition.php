<?php

namespace App;

class Definition
{
    const PLUGIN_ID = 'f294e35c91f82779185fd50e78e39478';

    const KEY_NOTIFY_TYPE = 'notifyType';
    const KEY_DING_TALK_ACCESS_TOKEN = 'dingTalkAccessToken';
    const KEY_DING_TALK_KEYWORD = 'dingTalkKeyword';
    const KEY_TGBOT_CHAT_ID = 'tgbotChatId';
    const KEY_TGBOT_TOKEN = 'tgbotToken';
    const KEY_CUSTOM_LINK = 'customLink';

    const NOTIFY_TYPE_NONE = 'none';
    const NOTIFY_TYPE_DING_TALK = 'dingTalk';
    const NOTIFY_TYPE_TG = 'tg';
    const NOTIFY_TYPE_CUSTOM = 'custom';

    const EVENT_NEW_COMMENTS = 'eventNewContents';

}
