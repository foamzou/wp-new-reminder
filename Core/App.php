<?php

use App\Definition;
use App\Utils\Router;

define('APP_ROOT', __DIR__);

Router::handleRequest();
initMenu();
initEvent();



function initMenu()
{
    add_action('admin_menu', function () {
        add_options_page('通知设置', 'WP New Reminder', 'edit_theme_options', Definition::PLUGIN_ID, function () {
            display('setting');
        });
    });
}

function initEvent()
{
    add_action('comment_post' , [new \App\Event\NewComments, 'run']);
}
