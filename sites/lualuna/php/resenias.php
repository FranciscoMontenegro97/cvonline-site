<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logos/favicon.png">
    <link rel="stylesheet" href="../style/style.css">
    <title>Comentarios/Reseñas</title>
</head>
<body>
    <div class="ContenedorPHPComentario">
        <?php
            include('conexion.php');

            @$conexion = mysqli_connect('localhost','id18870021_franciscocv','M4ZwCT@mt|9NXd/U','id18870021_almacendesitio') or exit("Error en la conexion.");

            $nombre = $_POST['NombreRese'];
            $email =  $_POST['CorreoRese'];
            $mensaje = $_POST['TextoRes'];
            $fechaEnvio = date("Y-m-d");

            $consulta_alta = "INSERT INTO comentarios VALUES(0,'$nombre','$email','$mensaje','$fechaEnvio')";
            $consulta = mysqli_query($conexion,$consulta_alta);
            if($cerrarConexion = mysqli_close($conexion)){
                echo "<h2>Se cargaron correctamente los datos, gracias por dejarnos su comentario/reseña.</h2>"; 
            } else{
            echo "<span class='alert alert-danger'>Error en el envío.  Escribanos a correo personal.</span>";
            } 
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<h4>Estos son los datos que nos envio:</h4>";
            echo "<br>Nombre: ".$nombre;
            echo "<br>Email: ".$email;
            echo "<br>Comentario/Reseña: ".$mensaje;
            echo "<br>Fencha de Envio: ".$fechaEnvio;
            echo "<br>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<hr>";
            echo "<br><a href='../index.html'>Volver al Inicio</a>";

           
        ?>
    </div>
</body>
</html>