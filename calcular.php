<?php 
    include('funciones.php');
    include('conexion.php');

    $id = $_GET['id'];

    //$co=mysqli_connect($host,$user,$pw,$db) or die("problemas en la conexion");
	//$mos=mysqli_query($co,"SELECT * FROM 'productos' WHERE id_producto=$id")or die("problemas al extrar datos (calcular.php:8)");
	//$row= $mos->fetch_assoc();

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

    <center><div class="calcular">
        <?php if ($pais=='Alemania') {
            ?>
                <img class="bandera" src="imagenes/banderas/alemania.png" alt="Bandera de Alemania" title="Bandera De Alemania">
            <?php
        }elseif ($pais=='China') {
            ?>
                <img class="bandera" src="imagenes/banderas/china.jpg" alt="Bandera de China" title="Bandera De China">
            <?php
        }elseif ($pais=='E.E.U.U') {
            ?>
                <img class="bandera" src="imagenes/banderas/estados_unidos.png" alt="Bandera de Estados Unidos" title="Bandera De Estados Unidos">
            <?php
        }elseif ($pais=='Canada') {
            ?>
                <img class="bandera" src="imagenes/banderas/canada.png" alt="Bandera de Canada" title="Bandera De Canada">
            <?php
        }
        
        if ($transporte=='Aerea') {
            ?>
                <img class="transporte" src="imagenes/transportes/avion.png" alt="Transporte Aereo" title="Transporte Aereo">
            <?php
        }elseif ($transporte=='Maritima') {
            ?>
                <img class="transporte" src="imagenes/transportes/barco.png" alt="Transporte Maritimo" title="Transporte Maritimo">
            <?php
        }elseif ($transporte=='Terrestre') {
            ?>
                <img class="transporte" src="imagenes/transportes/camion.png" alt="Transporte Terrestre" title="Transporte Maritimo">
            <?php
        }?>

    </div></center>

    </body>
</html>