<?php

require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        
        case 'search':
            extract($_POST);
            $s = new Search();


            $response = $s->basic('users',$search,['name','email']);


            foreach ($response as $row){
                echo el::li('',[$row['name']]);
            }

            break;
        
        default:

        break;
    }
}
