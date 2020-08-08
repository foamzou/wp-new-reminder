<?php

namespace App\Sender;

use App\Definition;

class CustomLink extends AbstractSender
{
    public function send()
    {
        $url = getOption(Definition::KEY_CUSTOM_LINK, null);
        $PLACE = '#MSG#';
        if (empty($url) || strpos($url, $PLACE) === false) {
            return;
        }

        $content = "[{$this->title}] \n {$this->content}";
        $content = urlencode($content);

        $url = str_replace($PLACE, $content, $url);
        file_get_contents($url);
    }
}
