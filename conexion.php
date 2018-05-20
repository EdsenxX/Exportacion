<?php 

$host='localhost';
$user='root';
$pw='';
$db='exportacion';

$con=mysqli_connect($host,$user,$pw) or die ("Error en la conexión (conexion.php:8)");
$sdb=mysqli_select_db($con,$db) or die ("Error en la conexion con la base de datos (conexion.php:9)");

?>