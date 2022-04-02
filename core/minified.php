<?php

function fetchall($table, $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->getall($table, $order, $limit);

    return $response;
}

function customfetch($table, $target, $conjunction = '', $limit = '')
{
}
