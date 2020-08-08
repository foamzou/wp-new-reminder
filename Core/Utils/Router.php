<?php


namespace App\Utils;

class Router
{
    private static $routerMap = [];

    public static function register($api, $callback)
    {
        self::$routerMap[$api] = $callback;
    }

    public static function handleRequest()
    {
        if (empty($_POST['router'])) {
            return;
        }
        $api = $_POST['router'];
        if (self::$routerMap[$api]) {
            (self::$routerMap)[$api]($_POST);
            return;
        }

        @list($controller, $action) = @explode('/', $api);
        if (empty($controller) || empty($action)) {
            return;
        }
        call_user_func(["\App\Handler\\$controller", $action], $_POST);
    }
}
