<?php

function fetchall($table, $records, $target = '')
{
    $init = new Sel();
    $response = $init->getall($table, $order = [], $limit = '');
}
