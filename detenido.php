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
		<link rel="stylesheet" type="text/css" href="css/detenidos.css">	<!-- Enlaza JavaScript y CSS externos a la página principal -->
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

		</div>


		<!-- ------------------------------------------------------------ -->
		<div class = "clear"></div>	<!-- Elemento creado sirve para comenzar con un nuevo orden de elementos -->

		<div class="contenido">
			<br>
			<h3>DECRETO 229</h3>
		</div>
		<div class="texto">
			<h6>ARTÍCULO ÚNICO. Se expide la Ley de Protección de Datos Personales en Posesión de Sujetos 
				Obligados del Estado de México y Municipios, para quedar como sigue:</h6>
		</div>
		<div class="contenido">
			<h5>LEY DE PROTECCIÓN DE DATOS PERSONALES EN POSESIÓN DE SUJETOS OBLIGADOS</h5>
			<h5>DEL ESTADO DE MÉXICO Y MUNICIPIOS</h5>
			<br>
			<h5>TÍTULO PRIMERO</h5>
			<h5>DE LAS DISPOSICIONES GENERALES</h5>
			<br>
			<h5>CAPÍTULO PRIMERO</h5>
			<h5>DEL OBJETO Y ÁMBITO DE APLICACIÓN DE LA LEY</h5>
		</div>
		<div class="texto">
			<h6>De los Sujetos Obligados<p></p>
				Artículo 4. Para los efectos de esta Ley se entenderá por:</h6>
			<h7><strong>II. Anonimización:</strong> al tratamiento que permite evitar la identificación de la o el titular a través de sus 
				datos personales.
			</h7>
			<br>
			<h7><strong>IV. Áreas o Unidades Administrativas:</strong>a las instancias que pertenecen los sujetos obligados que 
				cuenten o puedan contar, dar tratamiento y ser responsables o encargados, usuarias o usuarios de los 
				sistemas y bases de datos personales previstos en las disposiciones legales aplicables.
			</h7>
			<br>
			<h7><strong> V. Aviso de Privacidad:</strong> al documento físico, electrónico o en cualquier formato generado por el 
				responsable que es puesto a disposición del Titular con el objeto de informarle los propósitos del 
				tratamiento al que serán sometidos sus datos personales.
			</h7>
			<br>
			<h7><strong>VI. Base de Datos:</strong>al conjunto de archivos, registros, ficheros, condicionados a criterios determinados 
				con independencia de la forma o modalidad de su creación, tipo de soporte, procesamiento, 
				almacenamiento, organización y acceso.				
			</h7>
			<br>
			<h7><strong>VII. Bloqueo:</strong>a la identificación y conservación de datos personales una vez cumplida la finalidad para 
				la cual fueron recabados, con el propósito de determinar posibles responsabilidades en relación con su 
				tratamiento, hasta el plazo de prescripción legal o contractual, transcurrido este se procederá a su 
				cancelación en los sistemas y bases de datos que corresponda.
			</h7>
			<br>
			<h7><strong>VIII. Cómputo en la nube:</strong> al modelo de provisión externa de servicios de cómputo bajo demanda, que 
				implica el suministro de infraestructura, plataforma o programa informático, distribuido de modo 
				flexible, mediante procedimientos virtuales, en recursos compartidos dinámicamente.
			</h7>
			<br>
			<h7><strong>XI. Datos personales:</strong> a la información concerniente a una persona física o jurídica colectiva 
				identificada o identificable, establecida en cualquier formato o modalidad, y que esté almacenada en los 
				sistemas y bases de datos, se considerará que una persona es identificable cuando su identidad pueda 
				determinarse directa o indirectamente a través de cualquier documento informativo físico o electrónico.
			</h7>
			<br>
			<h7><strong>XII. Datos personales sensibles:</strong> a las referentes de la esfera de su titular cuya utilización indebida 
				pueda dar origen a discriminación o conlleve un riesgo grave para éste. De manera enunciativa más no 
				limitativa, se consideran sensibles los datos personales que puedan revelar aspectos como origen racial 
				o étnico, estado de salud física o mental, presente o futura, información genética, creencias religiosas, 
				filosóficas y morales, opiniones políticas y preferencia sexual.
			</h7>
			<br>
			<h7><strong>XIV. Destinatario:</strong> a la persona física o jurídica colectiva pública o privada a quien el responsable 
				transfiere datos personales.				
			</h7>
			<br>
			</h7>
			<h7><strong>XVI. Disociación:</strong> al procedimiento por el que los datos personales no pueden asociarse a la o el 
				titular, ni permitir por su estructura, contenido o grado de desagregación, la identificación individual 
				del mismo.
			</h7>
			<br>
			</h7>
			<h7><strong>XX. Evaluación de impacto en la protección de datos personales:</strong> al documento por el que los 
				sujetos obligados que pretendan poner en operación o modificar políticas públicas, programas, 
				sistemas, bases o plataformas informáticas, aplicaciones electrónicas, cualquier otra tecnología o 
				procedimiento que implique el tratamiento intensivo o relevante de datos personales, valoran y 
				establecen con parámetros cualitativos y/o cuantitativos los impactos reales respecto de determinado 
				tratamiento de datos personales, a efecto de identificar y mitigar posibles riesgos relacionados con los 
				principios y deberes aplicables al tratamiento y derechos de las y los titulares, así como los deberes de 
				los responsables y encargados, previstos en esta Ley y demás disposiciones legales aplicables.
			</h7>
			<br>
			<br>
			<div class="d-grid gap-2 col-6 mx-auto"> <!-- clase de bootstrap -->
				<a class="btn btn-primary" href="reportepdf.php" download="Informe de Personas Detenidas" ><i class="bi bi-filetype-pdf"></i>Reporte de Personas Detenidas</a> <!-- boton de descarga de pdf -->
			</div> <!-- cierre de clase de bootstrap -->
			<br>
			<br>
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