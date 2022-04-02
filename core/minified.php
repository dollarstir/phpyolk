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

function search($table, $searchword, $record, $order = [], $limit = '')
{
    $init = new search();
    $response = $init->basic($table, $searchword, $record, $order, $limit);

    return $response;
}
function sendmail($domain, $subject, $message, $from_name = 'Yolk Mailer', $to, $reply_to = 'info@phpyork.com', $reply_to_name = 'Yolk Mailer')
{
    $n = new Mail();
    $response = $n->sendmail($domain, $subject, $message, $from_name, $to, $reply_to, $reply_to_name);

    return $response;
}

function update($table, $records, $target = '', $files = null, $uploadto = 'yolkassets/upload')
{
    $init = new Upd();
    $response = $init->update($table, $records, $target, $files, $uploadto = 'yolkassets/upload');

    return $response;
}
function insert($table, $records, $files = null, $uploadto = 'yolkassets/upload')
{
    $init = new Add();
    $response = $init->insert($table, $records, $files, $uploadto);

    return $response;
}

function delete($table, $target, $conjunction = '')
{
    $init = new Del();
    $response = $init->delete($table, $target, $conjunction);

    return $response;
}

function countall($table)
{
    $init = new Counter();
    $response = $init->countall($table);

    return $response;
}

function customcount($table, $target, $conjunction = '')
{
}
