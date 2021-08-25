<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

echo 'si funciona php';
echo PHP_VERSION;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try{

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host ='smtp-mail.outlook.com';
    $mail->SMTPAuth =true;
    $mail->Username ='juan_yoko@hotmail.com';
    $mail->Password ='627903Seb4s';
    $mail->SMTPSecure ='STARTTLS';
    $mail->Port =587;

    $mail->setFrom('robledojuanse@gmail.com', 'Juan Robledo');
    $mail->addAddress('robledojuanse@gmail.com');

    $mail->isHtml(true);
    $mail->Subjec = 'Enviando Correo';  
    $mail->Body = 'test mail' ;

    $mail->send();
    echo('correo enviado');

}
catch(Exception $e)
{

    echo 'error: ', $mail->ErrorInfo;
}




?>