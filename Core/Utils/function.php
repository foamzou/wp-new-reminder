<?php

function display($page)
{
    require_once(APP_ROOT . "/View/{$page}.php");
}

function setOption($k, $v)
{
    $k = \App\Definition::PLUGIN_ID . '-' . $k;
    update_option($k, $v);
}

function getOption($k, $v = '')
{
    $k = \App\Definition::PLUGIN_ID . '-' . $k;
    return get_option($k, $v);
}

function requestByCurl($url, $body, $header = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
