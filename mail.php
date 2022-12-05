<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function emailSust($body, $email, $name, $html = false){
    //Configuracion inicial para el servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'francisco.gabriel.m97@gmail.com';
    $phpmailer->Password = 'nyygvllljkrwzxrg';

    //Anadiendo destinatarios
    $phpmailer->setFrom('francisco.gabriel.m97@gmail.com', 'Mi medio de contacto.');
    $phpmailer->addAddress($email, $name);
    
    //Definiendo el contenido de mi Email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Body    = $body;

    //Enviar correo
    $phpmailer->send();
}

?>