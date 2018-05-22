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

    <body>
    <?php 
        funciones::menu();
    ?>

    <?php 
        echo $pais;
        echo $transporte;
        echo $cantidad;
    ?>

    <div>
        <?php if ($pais=='Alemania') {
            ?>
                <img src="imagenes/banderas/alemania.png" alt="Bandera de Alemania" title="Bandera De Alemania">
            <?php
        }elseif ($pais=='China') {
            ?>
                <img src="imagenes/banderas/china.jpg" alt="Bandera de China" title="Bandera De China">
            <?php
        }elseif ($pais=='E.E.U.U') {
            ?>
                <img src="imagenes/banderas/estados_unidos.png" alt="Bandera de Estados Unidos" title="Bandera De Estados Unidos">
            <?php
        }elseif ($pais=='Canada') {
            ?>
                <img src="imagenes/banderas/canada.png" alt="Bandera de Canada" title="Bandera De Canada">
            <?php
        }
        
        if ($transporte=='Aerea') {
            ?>
                <img src="imagenes/transportes/avion.png" alt="Transporte Aereo" title="Transporte Aereo">
            <?php
        }elseif ($transporte=='Maritima') {
            ?>
                <img src="imagenes/transportes/barco.png" alt="Transporte Maritimo" title="Transporte Maritimo">
            <?php
        }elseif ($transporte=='Terrestre') {
            ?>
                <img src="imagenes/transportes/camion.png" alt="Transporte Terrestre" title="Transporte Maritimo">
            <?php
        }?>

    </div>

    </body>
</html>