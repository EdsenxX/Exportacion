<?php 
    include('funciones.php');
    include('conexion.php');

    $pais = $_GET['pais'];
    $transporte = $_GET['transporte'];
    $cantidad = $_GET['cantidad'];


?>

<!DOCTYPE html>
<html lang="en">

    <?php
        funciones::head();
    ?>

    <?php 
        funciones::menu();
    ?>

    <?php 
        echo $pais;
        echo $transporte;
        echo $cantidad;
    ?>

    <body>
    
    </body>
</html>