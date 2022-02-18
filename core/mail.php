<?php

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;

 // namespace PHPMailer\PHPMailer;

$cc = 'PHPMailer\PHPMailer';
class Mail extends PHPMailer
{
//    ader/autoloader.php';

    public function sendmail($domain, $subject, $message, $to, $from='info@pphpyolk.com', $from_name='Yolk Mailer',$reply_to='info@phpyork.com', $reply_to_name='Yolk Mailer')
   
    
    {
        // PHPMailer\PHPMailer\PHPMailer;
        // PHPMailer\PHPMailer\SMTP;
        try {
            $mail = new PHPMailer(true);

            // Server Settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host = $domain;

            // Recipents
            $mail->setFrom($from, $from_name);
            $mail->addReplyTo($reply_to, $reply_to_name);
           foreach ($to as $key ){
                $mail->addAddress($key);
            }
            $mail->Subject = $subject;

            // Message
            $mail->isHTML(true);
            $mail->Body = $message;

            echo $mail->send();
            // var_dump($mail->send());
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
