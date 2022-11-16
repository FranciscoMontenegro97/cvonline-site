<?php 

//Conexion MySQL

include "conexion.php";
@$conexion = mysqli_connect('localhost','id18870021_franciscocv','TLWr4*PYXX(!QdZS6&UG','id18870021_almacendesitio') or exit("Error en la conexion.");
//Toma el email y la contra del ususario

$IngresoUsuario = $_POST['emailIngreso'];
$ClaveUsuario = $_POST['contraIngreso'];

//Toma de datos para logearse

$Query3 = mysqli_query($conexion, "SELECT nombre, email, contra FROM registro WHERE email='$IngresoUsuario' AND contra='$ClaveUsuario'");
$verif = mysqli_num_rows($Query3);

if($verif == 0){
    echo "<p>No encontramos sus datos en nuestra base.</p>";
    echo "<a href='../ingreso.html'>Volver</a>";
}else{
    session_start();

    $_SESSION['emailIngreso'] = $IngresoUsuario;
    $_SESSION['contraIngreso'] = $ClaveUsuario;
    $userUno = mysqli_fetch_array($Query3);
    $_SESSION['nombre'] = $userUno['nombre'];
    echo "<h2>Bienvenido ".$_SESSION['nombre'].".</h2>";
    echo "<p><a href='../index.html'>Volver al Inicio</a></p>";
}

?>