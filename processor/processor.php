<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'welcome':

            function httpPost($url, $data)
            {
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);

                return $response;
            }
            echo json_decode(httpPost('submission.phpyolk.com', $usermail));
            $mail = new Mail();
            $response = $mail->sendmail('www.phpyolk.com', 'New user', 'New user has started using yolk', 'Yolk User', ['kpin463@gmail.com']);
            echo $response;

            break;

        default:

        break;
    }
}
