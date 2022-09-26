<?php
   //Reseteamos variables a 0.
    $nombre = $email = $mensaje = $para = $headers = $msjCorreo = NULL;

    if (isset($_POST['enviar'])) {
      //Obtenemos valores input formulario
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $mensaje = $_POST['comments'];
        $para = 'francisco.gm97@hotmail.com';

      //Creamos cabecera.
        $headers = 'From: '. $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

      //Componemos cuerpo correo.
        $msjCorreo = "Nombre: " . $nombre;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Email: " . $email;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Mensaje: " . $mensaje;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Estimado emisario si recibe este email quiere decir que se envio correctamente, le dejo un saludo cordial y gracias por sus comentarios.";

        if (@mail($para, $msjCorreo, $headers)) {
          echo "<script language='javascript'>
                  alert('Mensaje enviado, muchas gracias.');
                  window.location.href='index.php'
                </script>";
      } else {
          echo "<script language='javascript'>
                  alert('fallado');
                  window.location.href='index.php'
                </script>";
      }
    }
?>
