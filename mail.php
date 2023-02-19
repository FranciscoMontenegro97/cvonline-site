<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function emailSust($body, $email, $name, $html = false){
    //Configuracion inicial para el servidor de correos
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'mail.fgm97.online ';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'francisco.gabrielm97@fgm97.online';
    $phpmailer->Password = 'Mundoredondo01';

    //Anadiendo destinatarios
    $phpmailer->setFrom('francisco.gm97@hotmail.com', 'Mi medio de contacto.');
    $phpmailer->addAddress($email, $name);
    
    //Definiendo el contenido de mi Email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Body = $body;

    //Enviar correo
    $phpmailer->send();
}

?>