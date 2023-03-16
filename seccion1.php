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
					    <a class="nav-link active" aria-current="page" href="bienvenida.php">Secretaría de Seguridad del Estado de México</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="seccion1.php">Informe</a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="guia.php">Guía de Llenado de IPH</a>
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
        		<form action="conexion - copia.php" method="POST">
        			<h3 class="titsec">LLENADO DE IPH</h3>
        			<p class="titsec">Sección 1. Puesta a Disposición</p>
        			<label>Fecha:
        				<input type="date" name="fecha" min="2023-02-30" max="2023-04-30" required>
        			</label>
        			<br>
        			<br>

        			<p><strong>Datos de quien realiza la puesta a disposición/Primer respondiente</strong></p>
        			<br>
        			<label>
        				Primer apellido: <input type="text" name="ap_sp" required>
        			</label>
        			<label>
        				Segundo apellido: <input type="text" name="am_sp" required>
        			</label>
        			<label>
        				Nombre(s): <input type="text" name="nom_sp" required>
        			</label>
        			<br>
        			<br>

        			Seleccione la institución a la que pertenece:
					<select name="inst">
					    <!-- Opciones de la lista -->
					    <option >Policia Estatal</option> <!-- Opción por defecto -->
					    <option >Policia Municipal</option>
					</select>
					<div class="divider div-transparent div-stopper"></div>
					<br>


					<p class="titsec">Sección 2. Datos de la Probable Infracción Administrativa</p>
					<br>
					<p><strong>Conocimiento de la probable infracción administrativa por el primer respondiente</strong></p>
					<br>

					¿Cómo se enteró del hecho?
					<select name="ente" >
					    <!-- Opciones de la lista -->
					    <option>Presencia directa en la comisión de la probable infracción</option>
					    <option>Queja</option>
					    <option>Llamada de emergencia</option>
					</select>


					<div class="divider div-transparent div-stopper"></div>
					<br>


					<p class="titsec">Sección 3. Lugar de la Intervención</p>
					<br>
					<p><strong> Ubicación geográfica</strong></p>
					<br>
					<label>
        				Calle/Tramo carretero: <input type="text" name="calle" required>
        			</label>
        			<br>
        			<br>
        			<label>
        				No. exterior: <input type="text" name="numex">
        			</label>
        			<label>
        				No. interior: <input type="text" name="numin">
        			</label>
        			<label>
        				Código Postal: <input type="text" name="cp" required minlength="5" maxlength="5">
        			</label>
        			<br>
        		    <br>
        			<label>
        				Colonia/Localidad: <input type="text" name="col" required>
        			</label>
        			<label>
        				Municipio/Demarcación territorial: <input type="text" name="muni" required>
        			</label>
        			<br>
        			<br>
        			<label>
        				Referencia: <input type="text" name="ref" required>
        			</label>
        			<div class="divider div-transparent div-stopper"></div>
					<br>


					<p class="titsec">Sección 4. Narrativa de los hechos</p>
					<br>
					<p><strong>Descripción de los hechos y actuación de la autoridad</strong></p>
					<br>
					<label>
        				Relate cronológicamente las acciones realizadas durante su intervención desde el conocimiento del hecho, hasta su conclusión o la puesta a disposición. En su
						caso, explique las circunstancias de modo, tiempo y lugar que motivaron cada uno de los niveles de contacto y la detención. Tome como base las siguientes
						preguntas: ¿Quién? (personas), ¿Qué? (hechos), ¿Cómo? (circunstancias), ¿Cuándo? (tiempo) y ¿Dónde? (lugar).
						<br>
						<input class="caja" type="text" name="hechos" required>
        			</label>
        			<br>
        			<div class="divider div-transparent div-stopper"></div>
        			<br>


        			<p class="titsec"><strong>Datos generales de la persona detenida</strong></p>
        			<br>
        			<label>
        				Primer apellido: <input type="text" name="ap_pd" required>
        			</label>
	        		<label>
	        			Segundo apellido: <input type="text" name="am_pd" required>
	        		</label>
	        		<label>
	        			Nombre(s): <input type="text" name="nom_pd" required>
	        		</label>
	        		<br>
	        		<br>
	        		<label>
	        			Apodo o alias: <input type="text" name="apodo" required>
	        		</label>
	        		<label>
	        			Nacionalidad: <input type="text" name="naci" required>
	        		</label>
	        		<br>
	        		<br>
	        		Sexo:
	        		<select name="sexo">
                        <option>Mujer</option>
                        <option>Hombre</option>
                    </select>

	        		<br>
        			<div class="divider div-transparent div-stopper"></div>
        			<br>



        			<p><strong> Domicilio de la persona detenida </strong></p>
					<br>
					<label>
        				Calle/Tramo carretero: <input type="text" name="calle_pd" required>
        			</label>
        			<br>
        			<br>
        			<label>
        				No. exterior: <input type="text" name="numex_pd">
        			</label>
        			<label>
        				No. interior: <input type="text" name="numin_pd">
        			</label>
        			<label>
        				Código Postal: <input type="text" name="cp_pd" required minlength="5" maxlength="5">
        			</label>
        			<br>
        			<br>
        			<label>
        				Colonia/Localidad: <input type="text" name="col_pd" required>
        			</label>
        			<label>
        				Municipio/Demarcación territorial: <input type="text" name="muni_pd" required>
        			</label>
        			
        			<br>
        			<div class="divider div-transparent div-stopper"></div>
        			<br>

        			<label>
        				Describa brevemente a la persona detenida, incluyendo tipo de vestimenta y rasgos visibles (barba, tatuajes, cicatrices, lunares, bigote, etc.). En caso de no contar con la fecha de nacimiento, señalar la edad aproximada de la persona.
						<br>
						<input class="caja" type="text" name="desc_pd" required>
        			</label>

        			<br>
        			<br>
					<p class="titsec"><strong>Cada vez que se complete un formulario, dar click en SUBIR.</strong></p>
        			<p class="titsec"><strong>En caso de que la detención, se relice retención de vehículo dar click en el botón de VEHÍCULO.</strong></p>
        			


        			<br>
        			<br>
        			<div class="subirfor">
        				<button class="btn btn-primary active" type="submit" title="subir" name="Subir">Subir</button>  
        			</div>
					<br>
					<br>
        			<div class="ve">
			        	<a class="btn btn-outline-primary" href="anexo_vehi.php" ><i class="bi bi-car-front"></i>Vehículo</a>
			        </div>
        			<br>
        			<br>

        		</form>
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