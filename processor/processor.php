<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'welcome':

            function psd($url, $data)
            {
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([$data]));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);

                return $response;
            }
            extract($_POST);
            // $fields = ['email' => $usermail];

            //url-ify the data for the POST
            // $dd = http_build_query($fields);
            $usermail =str_replace('.com','dotcom',$usermail);
            $usermail =str_replace('@','yolk',$usermail);
            $rep =file_get_contents('http://phpyolk.com/newuser/'.$usermail);
            // echo 'helllo';
            echo json_decode($rep);
            // $mail = new Mail();
            // $response = $mail->sendmail('www.phpyolk.com', 'New user', 'New user has started using yolk', 'Yolk User', ['kpin463@gmail.com']);
            // echo $response;

            break;

        default:

        break;
    }
}
