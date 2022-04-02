<?php

function fetchall($table, $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->getall($table, $order, $limit);

    return $response;
}

function customfetch($table, $target, $conjunction = '', $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->select($table, $target, $conjunction, $order, $limit);

    return $response;
}

function sms($senderid, $recipient, $message)
{
    $send = new Yolksms();
    $response = $send->sms($senderid, $recipient, $message);

    return $response;
}
