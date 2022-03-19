<?php

require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        
        case 'search':
            extract($_POST);
            $s = new Search();
            $response = $s->basic('users',$search,['name']);
            echo $response;

            break;
        
        default:

        break;
    }
}
