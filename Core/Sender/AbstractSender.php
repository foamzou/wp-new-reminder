<?php

namespace App\Sender;

abstract class AbstractSender
{
    protected $title;
    protected $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    abstract public function send();
}
