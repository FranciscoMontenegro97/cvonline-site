<?php

$host='localhost';
$userMySQL ='root' ;
$passwordMySQL= '';
$bddd='receptormail';

@$conexion = mysqli_connect($host,$userMySQL,$passwordMySQL,$bbdd) or exit("Error en la conexion."); //tambien podemos usar die()

?>