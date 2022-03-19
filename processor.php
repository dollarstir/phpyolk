<?php

require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        
        case 'search':
            extract($_POST);

            break;
        
        default:

        break;
    }
}
