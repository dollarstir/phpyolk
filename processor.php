<?php

require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'adduser':
            $add = new Inser();
            extract($_POST);
            
            echo $ersponse = $add->insert('users',
           $records = [
                'name' => $name,
                'email' => $email,
                'contact' => $contact,
           ],$_FILES
        );
        break;
        
           default:

            break;
    }
}
