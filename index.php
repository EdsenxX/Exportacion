<?php

    include('conexion.php');//Aqui Incluimos el archivo conecion.php
    include('funciones.php');//Aqui Incluimos el archivo funciones.php

    //Aqui seleccionamos la tabla de la base de datos
    $query="SELECT * FROM productos";
    //Aqui hacemos que nos arroje los datos de la tabla
	$resultado=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<?php 
    //Llamamos la funcion head del archivo funciones.php
    funciones::head();
?>

<body>
    
    <?php 
        //Llamamos la funcion menu del archivo funciones.php
        funciones::menu();
    ?>

    <?php 
        funciones::slide();
    ?>

    <!-- Aqui Empiesa el contenido de la pagina-->
    <section>
	
    <div>
        <?php
            $N=0;
            while ($row=mysqli_fetch_array($resultado)) {
            $N=$N+1;		
        ?>
    
        <div class="contenedor">
                
            <form class="elemento" action="calcular.php?id=<?php echo $row['id_producto']?>" id="con"  >   
            <!--<form class="elemento" action="calcular.php?id=<?php echo $row['id_producto']?>" id="con">-->
                <img src="<?php echo $row['imagen']; ?>" class="port">
                <center><p class="pad"><?php echo $row['nombre'];?></p></center>

                <p>Transporte:</p>
                <select name="transporte" class="lista">
                    <option value="Aerea">Aerea</option>
                    <option value="Terrestre">Terrestre</option>
                    <option value="Maritima">Maritima</option>
                </select>

                <p>Cantidad (Toneladas)</p>
                <select name="cantidad" class="lista">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="60">60</option>
                    <option value="70">70</option>
                    <option value="80">80</option>
                    <option value="90">90</option>
                    <option value="100">100</option>
                </select>

                <p>Pais</p>
                <select name="pais" class="lista">
                    <option value="Alemania">Alemania</option>
                    <option value="China">China</option>
                    <option value="Canada">Canada</option>
                    <option value="E.E.U.U">E.E.U.U</option>
                </select>

                <center><input type="submit" value="Calcular" class="boton" method="post"></center>

            </div>
        </form>
                    <?php
                        $N=$N+1;
                        }	
                    ?>
    </div>
</section>

</body>
</html>