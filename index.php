<!doctype html>	<!--- Define que el documento esta bajo el estandar HTML 5. --->

<html lang = "es">	<!--- Crea la pagina HTML principal y se le asigna el lenguaje español, se define la raíz del documento. --->

	<head>	<!-- Colección de metadatos acerca de la página principal, incluye enlaces, scripts y hojas de estilo. -->
		
		<title> IPH </title>	<!-- Título del documento, se muestra en la barra del título del navegador -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- (8-bit Unicode Transformation Format) Define los metadatos que no pueden ser difinidos usando otro elemento HTML. -->
		<link rel="stylesheet" type="text/css" href="css/index.css">	<!--  CSS estilos de la página principal -->
		<meta name= "viewport" content= "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	<!-- la etiqueta que mejor representa la web en movilidad, ya que nos permite indicar cómo se verá un proyecto web en los dispositivos móviles. -->
		<link rel= "icon" href= "Images\EscPol.png">	<!-- Ícono que se muestra en el titulo de la pestaña -->
		<link rel = "stylesheet" href = "css/nivo-slider.css">	<!-- Enlaza el formato nivo creado en CSS (tamaño de los sliders)-->
		<link rel = "stylesheet" href = "themes/default/default.css">	<!-- Enlaza el formato nivo creado en CSS (flechas y circulos de cambio de imagen de slider)-->
		<script src = "js/jquery-3.1.1.min.js"></script>	<!-- Se utiliza para insertar o hacer referencia a un script ejecutable dentro de un documento HTML, hace referencia a archivos JavaScript-->
		<script src = "js/jquery.nivo.slider.js"></script>	<!-- Hace referencia a documentos JavaScript -->

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- Instalación boostrap via CDN -->

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> <!-- Instalación boostrap via CDN iconos-->
	
		<script type= "text/javascript">
			$(window).on('load', function() {		<!-- especifica el lenguaje de scripts de los contenidos del elemento y prevalece sobre el lenguaje de scripts por defecto. -->
			$('#slider').nivoSlider();
			});
		</script>
		
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

			<br>	<!-- Salto de renglón -->

			<!-- ------------------------------------------- -->
			
			<div class = "slider-wraper theme-default">	<!-- Se manda a llamar el estilo del nivo creado en css -->
				<div id = "slider" class = "nivoSlider">	<!-- Se manda a llamar el estilo del nivo creado en css -->
					<a href = "#"><img src = "Images/sli1.png"/></a>	<!-- Se crea enlace a la encuesta en el primer nivo slider -->
					<a href = "#"><img src = "Images/sli2.jpg"/> </a>	<!-- Se crea enlace en el segundo nivo slider -->
					<a href = "#"><img src = "Images/sli3.png"/> </a>	<!-- Se crea enlace en el tercer nivo slider -->
				</div>
			</div>

			<br>	<!-- Salto de renglón -->

			<div class="btn1">
				<a href="login.php" class="btn btn-primary active" >Iniciar sesion</a> <!-- Boton de boostrap -->
			</div>


			<br>	<!-- Salto de renglón -->

			<section class="mision">
				<h4>Misión</h4>
				<br>
				<div class="divider div-transparent div-stopper"></div>
				<br>
				<div class="mis">
					<h6>Efectuar las directrices establecidas en las leyes, normas, reglamentos y estatutos aplicables para "Cuidar a quien nos cuida", mediante orientación oportuna e integral en el ámbito institucional, jurídico y psicológico, siendo garantes de sus derechos humanos.</h6>
			    </div>
			</section>


			<section class="misioon">
				<h4>Visión</h4>
				<br>
				<div class="divider div-transparent div-stopper"></div>
				<br>
				<div class="mis">
					<h6>Ser una unidad administrativa de apoyo para dignificar la función policial de acuerdo con las leyes reglamentos y estatutos aplicables, promoviendo y orientando los derechos laborales de los policías, así como los derechos sociales de sus familias.</h6>
			    </div>
			</section>

			<section class="misiooon">
				<h4>Objetivo</h4>
				<br>
				<div class="divider div-transparent div-stopper"></div>
				<br>
				<div class="mis">
					<h6>La Unidad de Prevención y Atención Institucional tiene como eje central el dignificar la labor de la policía del Estado de México, con el objetivo de mejorar la calidad de las acciones que tiene encomendada la Secretaría Técnica a través de la Unidad de Prevención y Atención Institucional para establecer los ejes rectores de la actuación en sus tres áreas de atención integral, área psicológica, jurídica e institucional con el propósito de formalizar, estandarizar los métodos los procedimientos de trabajo y la difusión de las políticas que regulan su aplicación, vinculando a los elementos de la Secretaría de Seguridad con las instituciones correspondientes para brindar de manera gratuita la atención, acompañamiento, orientación y asesoramiento en cualquier área que brinda la Unidad de Prevención y Atención Institucionales personas servidoras públicas y/o familiares.</h6>
			    </div>
			</section>

			<section class="emergencia">
				<h4>Contactanos</h4>
				<br>
				<div class="divider div-transparent div-stopper"></div>
				<br>
				<img src="Images/telefonos-911.png">
				<img src="Images/blanco.jpg">
				<img src="Images/logo 089.png">
				
			</section>

		</div>	<!-- Termina el contenedor de la página -->

		<!-- ------------------------------------------------------------ -->

		<footer class="titt">
			<h1>
	  
				<a href="https://twitter.com/SS_Edomex?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twi"><i class="bi bi-twitter"></i></a>

				<a href="https://es-la.facebook.com/SS.Edomex/" class="face"><i class="bi bi-facebook"></i></a>

				<a href="https://www.youtube.com/c/SSEDOMEX" class="youtube"><i class="bi bi-youtube"></i></a>
					
			</h1>

			<p>Copyright 2023©</p>
			<p>Versión 2.0</p>

		</footer>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!-- Instalación boostrap via CDN -->
	
	</body>	<!-- Termina el cuerpo de la Página -->

</html>	<!-- Termina la Página HTML principal -->