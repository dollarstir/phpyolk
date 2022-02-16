<?php

class Config
{
    // for database conection
    public $db_host = 'localhost';
    public $db_name = 'tms';
    public $db_user = 'root';
    public $db_pass = '';

    // for sms (mnotify)
    public $apikey = '7j4dvJq18adHHitlkBgLiHP9j';

    // for momo payment Paystack

    public $public_key = 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a';

    public $currency_code = 'GHS';  //you can set GHS for Ghana, USD for Dollar , NG for Nageria

    public $callback_url = '/tms/success';
}
