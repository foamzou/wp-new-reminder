<?php


namespace App\Event;


use App\Definition;
use App\Sender\CustomLink;
use App\Sender\DingTalk;
use App\Sender\TgBot;

Abstract class AbstractEvent
{
    abstract public function run($params);

    protected function shouldTrigger($event)
    {
        if (getOption($event, false)
            && getOption(Definition::KEY_NOTIFY_TYPE, Definition::NOTIFY_TYPE_NONE) !== Definition::NOTIFY_TYPE_NONE
        ) {
            return true;
        }

        return false;
    }

    protected function notify($title, $content)
    {
        $notifyType = getOption(Definition::KEY_NOTIFY_TYPE, Definition::NOTIFY_TYPE_NONE);
        $policy = [
            Definition::NOTIFY_TYPE_DING_TALK => DingTalk::class,
            Definition::NOTIFY_TYPE_TG => TgBot::class,
            Definition::NOTIFY_TYPE_CUSTOM => CustomLink::class,
        ];

        if ($policy[$notifyType]) {
            (new $policy[$notifyType]($title, $content))->send();
        }
    }
}
