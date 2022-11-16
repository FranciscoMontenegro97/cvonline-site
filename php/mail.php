<?php 
if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $personalemail = 'francisco.gm97@hotmail.com';
        $comentario = $_POST['comments'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($personalemail,$email,$name,$comentario, $header);
        if($mail){
            echo "<h4>Mail enviado exitosamente!</h4>";
        };
    };
};
?>

