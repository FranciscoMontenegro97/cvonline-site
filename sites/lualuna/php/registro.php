<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logos/favicon.png">
    <link rel="stylesheet" href="../style/style.css">
    <title>Registro de usuario</title>
</head>
<body>
    <div class="ContenedorPHPComentario">
        <?php
            include('conexion.php');

            @$conexion = mysqli_connect('localhost','id18870021_franciscocv','M4ZwCT@mt|9NXd/U','id18870021_almacendesitio') or exit("Error en la conexion.");

            $nombre1 = $_POST['NombreRegistro'];
            $apellido2 = $_POST['ApellidoRegistro'];
            $email1 =  $_POST['CorreoRegistro'];
            $contrasenia = $_POST['ContraRegistro'];
            $contraseniaSegunda = $_POST['SegContraRegistro'];
            $provincia = $_POST['ProvinciasRegistro'];
                for($i=0; $i<count($provincia);$i++){
                    $pSeleccionada = $provincia[$i]; 
                }
            $localidad = $_POST['LocalidadRegistro'];
            $domicilio = $_POST['DomicilioRegistro'];
            $codigoPostal = $_POST['PostalRegistro'];
            $TelF = $_POST['TelefonoRegistro'];
            $TelC = $_POST['TelefonoCRegistro'];
            $fechaEnvio1 = date("Y-m-d");
            
            
            
            //Verificacion de que solo exista un solo correo
            $query1 = mysqli_query($conexion, "SELECT nombre FROM registro where email = '$email1'");
            $verificacion = mysqli_num_rows($query1);
            //Corroboramos que las contrase;as sean iguales
            if($contrasenia !== $contraseniaSegunda){
                echo "<p>Las contraseñas deben ser identicas, vuelva a intentarlo <a href='../registro.html'>AQUI</a>.</p>";            
            }elseif($verificacion > 0){
                // el email ya esta registrado
                echo "<p>La direccion de email corresponde a un usuario registrado.</p>";
                echo "<a href='../registro.html'>Volver</a>";
            }else{
                $consulta_alta1 = "INSERT INTO registro VALUES(0,'$nombre1','$apellido2','$email1','$contrasenia','$contraseniaSegunda','$pSeleccionada','$localidad','$domicilio','$codigoPostal','$TelF','$TelC','$fechaEnvio1')";
                $consulta = mysqli_query($conexion,$consulta_alta1);
                echo "<h2>Se cargaron correctamente los datos, gracias por registrarte en nuestro sitio.</h2>";
                echo "<br><p>Si desea volver al inicio presione aqui. <a href='../index.html'>Volver</a></p>";
                echo "<br><p>Si desea ingresar al presione aqui. <a href='../ingreso.html'>Ingresar</a></p>"; 
            }
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<h4>Estos son los datos que nos envio:</h4>";
            echo "<br>Nombre: ".$nombre1;
            echo "<br>Apellido: ".$apellido2;
            echo "<br>Email: ".$email1;
            echo "<br>Contraseña: ".$contrasenia;
            echo "<br>Segunda Contraseña: ".$contraseniaSegunda;
            echo "<br>Provincia: ".$pSeleccionada;
            echo "<br>Localidad: ".$localidad;
            echo "<br>Domicilio: ".$domicilio;
            echo "<br>Codigo Postal: ".$codigoPostal;
            echo "<br>Telefono Fijo: ".$TelF;
            echo "<br>Telefono Celular: ".$TelC;
            echo "<br>Fecha de Envio: ".$fechaEnvio1;
            echo "<br>";
            echo "<br>";
            echo "<hr>";
            echo "<br>";
            echo "<hr>";
        ?>
    </div>
</body>
</html>