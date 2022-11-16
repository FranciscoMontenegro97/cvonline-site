<?php

$host='localhost';
$userMySQL ='id18870021_franciscocv' ;
$passwordMySQL= 'M4ZwCT@mt|9NXd/U';
$bddd='id18870021_almacendesitio';

@$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or exit("Error en la conexion."); //tambien podemos usar die()

?>