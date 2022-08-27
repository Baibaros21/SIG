<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require "../CyberBullying/PHPMailer/src/PHPMailer.php";
require "../CyberBullying/PHPMailer/src/SMTP.php";
require "../CyberBullying/PHPMailer/src/Exception.php";
class mailer {

    private $mailer;

    function __construct($from,$password,$to,$subject,$body,$name) {
        $mail = new PHPMailer();
        $this->mailer = $mail;
        $mail->isSMTP();
        $mail->SMTPDebug = 3;//SMTP::DEBUG_SERVER;
        $mail->SMTPSecure="ssl";
        $mail->Host= 'smtp.gmail.com'; 
        $mail->Port  = 465;
        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->isHTML= true;
        $mail->smtpConnect([
            'ssl'=>[
                    'verify_peer'=>false,
                    'verify_peer_name'=>false,
                    'allow_self_signed'=>true
            ]
            ]);
        $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ));   
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to);
        $mail->Subject = ("$subject");
        $mail->Body = $body;

        
    
}

function sendMail(){
    if (!($this->mailer->send())) {
        echo 'Mailer Error: ' . $this->mailer->ErrorInfo;
        return false;
    } else {
      return true;
    }

}
}
?>