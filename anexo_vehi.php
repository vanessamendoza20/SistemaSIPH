<!doctype html>	<!--- Define que el documento esta bajo el estandar HTML 5. --->


<?php 
	session_start();
	if(!ISSET($_SESSION['usu'])){
		header('location:login.php');
	}
?>


<html lang = "es">	<!--- Crea la pagina HTML principal y se le asigna el lenguaje español, se define la raíz del documento. --->

	<head>	<!-- Colección de metadatos acerca de la página principal, incluye enlaces, scripts y hojas de estilo. -->
		
		<title> IPH </title>	<!-- Título del documento, se muestra en la barra del título del navegador -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- (8-bit Unicode Transformation Format) Define los metadatos que no pueden ser difinidos usando otro elemento HTML. -->
		<link rel="stylesheet" type="text/css" href="css/seccion1.css">	<!-- Enlaza JavaScript y CSS externos a la página principal -->
		<meta name= "viewport" content= "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	<!-- la etiqueta que mejor representa la web en movilidad, ya que nos permite indicar cómo se verá un proyecto web en los dispositivos móviles. -->
		<link rel= "icon" href= "Images\EscPol.png">	<!-- Ícono que se muestra en el titulo de la pestaña -->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- Instalación boostrap via CDN -->

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> <!-- Instalación boostrap via CDN iconos-->
		
	</head>	<!-- Termina el head de la página principal -->
	
	<body>	<!-- Inicia el cuerpo de la página -->
	
		<div class = "contenedor">	<!-- Inicia contenedor de toda la página-->
		
			<section class = "cabecera">	<!-- Se crea sección para la cabecera de la página -->
				<h1><img src= "Images/EDOMEX.png"></h1>	<!-- Se incerta logo del EDOMEX  -->
			</section>	<!-- Se cierra seccion para la cabezera de la página -->

			<section class="tit">
				<h4>Informe Policial Homologado</h4>
			</section>
			
			<section class = "cabecera2">	<!-- Se crea sección para la cabecera2 de la página -->
				<h1><img src= "Images/EscPol.png"></h1>	<!-- Se incerta logo de pol -->
			</section>	<!-- Se cierra seccion para la cabezera2 de la página -->



			<div class = "clear"></div>	<!-- Elemento creado sirve para comenzar con un nuevo orden de elementos -->



		<!-- ------------------------------------------------------------ -->
			<section class="men"> <!-- barra de navegacion -->
				<ul class="nav nav-tabs">
					<li class="nav-item">
					    <a class="nav-link active" aria-current="page" href="bienvenida2.php">Secretaría de Seguridad del Estado de México</a>
					</li>
					<li class="nav-item">
					   <a class="nav-link" href="seccion1.php">Informe</a>
					</li>
					<li class="nav-item">
					   <a class="nav-link" href="guia.php">Guía  de Llenado de IPH</a>
					</li>
					<li class="nav-item">
					   <a class="nav-link" href="lineamientos.php">Lineamientos IPH</a>
					</li>
					<li class="nav-item">
					   <a class="nav-link" href="calendario.php">Calendario</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="detenido.php">Detenciones</a>
					</li>
					<li>
						<a class="btn btn-outline-danger" href="cerrars.php"><i class="bi bi-box-arrow-right"></i></a>
					</li>
				</ul>

			</section> <!-- fin barra de navegacion -->

			<div class = "clear"></div>	<!-- Elemento creado sirve para comenzar con un nuevo orden de elementos -->

					
        <!-- ------------------------------------------------------------ -->
        	<section class="sec">
        		<form action="conexion_v.php" method="POST"> <!-- etiqueta formulario -->
        			<h3 class="titsec">LLENADO DE IPH</h3>
        			<p class="titsec"> DESCRIPCIÓN DE VEHÍCULO</p>
        			<p><strong> Fecha y hora de la retención del vehículo</strong></p>
        			<label>Fecha:
        				<input type="date" name="fecha_v" required>
        			</label>
        			<br>
        			<br>

        			<p><strong>Datos generales del vehículo retenido.</strong></p>
        			Tipo:
					<select name="tipo">
					    <!-- Opciones de la lista -->
					    <option >Terrestre</option> <!-- Opciónes -->
					    <option >Aéreo</option>
					    <option >Marítimo</option>
					</select>
					<br>
					<br>
					<label>
        				Marca: <input type="text" name="marca" required>
        			</label>
        			<label>
        				Modelo: <input type="text" name="modelo" required>
        			</label>
        			<label>
        				Color: <input type="text" name="color" required>
        			</label>
					<br>
					<br>
					Uso:
					<select name="uso">
					    <!-- Opciones de la lista -->
					    <option >Particular</option> <!-- Opciónes -->
					    <option >Transporte público</option>
					    <option >Carga</option>
					</select>
					<label>
        				Placa/Matrícula:<input type="text" name="placa" required minlength="8" maxlength="8">
        			</label>
					
        			<br>
        			<br>
        			<div class="subirfor">
        				<button class="btn btn-primary active" type="submit" title="subir" name="Subir">Subir</button>  
        			</div>
        			<br>
        			<br>

        		</form> <!-- cierre de etiqueta formulario -->
        	</section>
		</div>


		<!-- ------------------------------------------------------------ -->
		<div class = "clear"></div>	<!-- Elemento creado sirve para comenzar con un nuevo orden de elementos -->

		<footer class="titt"> <!-- Inicia el pie de pagina -->
			<h1>
				<a href="https://twitter.com/SS_Edomex?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twi"><i class="bi bi-twitter"></i></a> <!-- Icono de redes sociales -->

				<a href="https://es-la.facebook.com/SS.Edomex/" class="face"><i class="bi bi-facebook"></i></a> <!-- Icono de redes sociales -->

				<a href="https://www.youtube.com/c/SSEDOMEX" class="youtube"><i class="bi bi-youtube"></i></a> <!-- Icono de redes sociales -->
					
			</h1>

			<p>Copyright 2023©</p>
			<p>Versión 2.0</p>

		</footer> <!-- Termina pie de pagina -->


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!-- Instalación boostrap via CDN -->
	
	</body>	<!-- Termina el cuerpo de la Página -->

</html>	<!-- Termina la Página HTML principal -->