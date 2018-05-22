<?php 

    class funciones{
        
        public static function head(){//En esta funcion esto todo lo del head
            ?><head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Costo de Exportación</title>
                    <link rel="stylesheet" href="css/estilos.css">
					<link rel="shortcut icon" href="imagenes/mundo.png">
                    
                    <!-- Aqui esta todo lo que corresponde al menu -->
                    <link rel="stylesheet" href="css/menu.css">
                    <link rel="stylesheet" href="fonts.css">
	                <script src="http://code.jquery.com/jquery-latest.js"></script>
	                <script src="menu.js"></script>

                    <!-- Aqui esta todo lo del slideshow -->
                    <link rel="stylesheet" href="css/nivo-slider.css">
	                <link rel="stylesheet" href="css/mi-slider.css">
	                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	                <script src="js/jquery.nivo.slider.js"></script>
	                <script type="text/javascript"> 
		                $(window).on('load', function() {
		                    $('#slider').nivoSlider(); 
	                	}); 
	                </script>



                </head>
            <?php
        }
        
        public static function menu(){//En esta funcion esta todo lo del menu
            ?>
                
                <header>
		            <div class="menu_bar">
			            <a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
		            </div>
 
		            <nav>
			            <ul>
			
				            <li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
				            <li class="submenu">
				                <a href="#"><span class="icon-books"></span>Basico<span class="caret icon-circle-down"></span></a>
                            
                                <ul class="children">
					                <li><a href="#"><span class="icon-book"></span>Matematicas</a></li>
					                <li><a href="#"><span class="icon-book"></span>LEOyO</a></li>
					                <li><a href="#"><span class="icon-book"></span>Fisica</a></li>
					                <li><a href="#"><span class="icon-lab"></span>Quimica</a></li>
					                <li><a href="#"><span class="icon-book"></span>Calculo</a></li>
					                <li><a href="#"><span class="icon-leaf"></span>Ecologia</a></li>
					                <li><a href="#"><span class="icon-book"></span>Biologia</a></li>
			            	    </ul>
				            </li>
				
				            <li><a href="#"><span class="icon-user-tie"></span>Profecinal<span class="caret icon-circle-down"></span></a>
				                <ul class="children">
					                <li><a href="#"><span class="icon-terminal"></span>Programacion</a></li>
					                <li><a href="#"><span class="icon-video-camera"></span>Electricidad</a></li>
					                <li><a href="#"><span class="icon-lab"></span>Analista Quimico</a></li>
					                <li><a href="#"><span class="icon-camera"></span>Comunicacion</a></li>
					                <li><a href="#"><span class="icon-spoon-knife"></span>Alimentos y Bebidas</a></li>
					                <li><a href="#"><span class="icon-book"></span>Contabilidad</a></li>
				                </ul>
				            </li>
				
				            <li><a href="#"><span class="icon-film"></span>Multimedia<span class="caret icon-circle-down"></span></a>
				                <ul class="children">
					                <li><a href="#">Programacion</a></li>
					                <li><a href="#">Electricidad</a></li>
					                <li><a href="#">Analista Quimico</a></li>
					                <li><a href="#">Comunicacion</a></li>
				                </ul>
				            </li>
				
				            <li><a href="#"><span class="icon-book"></span>Extra</a></li>
				
				            <li><a href="#"><span class="icon-question"></span>Ayuda</a></li>
				
				            <li><a href="#"><span class="icon-user"></span>Cuenta<span class="caret icon-circle-down"></a>
				                <ul class="children">
					                <li><a href="#">Mi cuenta<span class="icon-user"></span></a></li>
					                <li><a href="#">Salir<span class="icon-exit"></span></a></li>
				                </ul>
				            </li>
			
			            </ul>
		            </nav>
	            </header>
            <?php
        }

        public static function slide(){//Aqui esta la funcion slide
            ?>
                <div class="slider-wrapper theme-mi-slider">
		            <div id="slider" class="nivoSlider">     
		                <img src="imagenes/slideshow/1.jpg" alt="" title="#htmlcaption1" />    
		                <img src="imagenes/slideshow/2.jpg" alt="" title="#htmlcaption2" />    
		                <img src="imagenes/slideshow/3.jpg" alt="" title="#htmlcaption3" /> 
						<img src="imagenes/slideshow/4.jpg" alt="" title="#htmlcaption4" />     
		            </div> 
		            <!--<div id="htmlcaption1" class="nivo-html-caption">     
		                <h1>Sean Bienvenidos</h1>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		            </div>
		            <div id="htmlcaption2" class="nivo-html-caption">     
		                <h1>Acerca de Nosotros</h1>
		            </div>
		            <div id="htmlcaption3" class="nivo-html-caption">     
		                <h1>Gracias por visitar</h1>
		            </div>
					<div id="htmlcaption4" class="nivo-html-caption">     
		                <h1>Gracias por visitar</h1>
		            </div>-->
	            </div>
            <?php
        }

    }
?>