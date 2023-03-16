<!doctype html>	<!--- Define que el documento esta bajo el estandar HTML 5. --->

<html lang = "es">	<!--- Crea la pagina HTML principal y se le asigna el lenguaje español, se define la raíz del documento. --->

	<head>	<!-- Colección de metadatos acerca de la página principal, incluye enlaces, scripts y hojas de estilo. -->
		
		<title> IPH </title>	<!-- Título del documento, se muestra en la barra del título del navegador -->
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- (8-bit Unicode Transformation Format) Define los metadatos que no pueden ser difinidos usando otro elemento HTML. -->
		<link rel="stylesheet" type="text/css" href="css/registrarse.css">	<!-- Enlaza JavaScript y CSS externos a la página principal -->
		<meta name= "viewport" content= "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	<!-- la etiqueta que mejor representa la web en movilidad, ya que nos permite indicar cómo se verá un proyecto web en los dispositivos móviles. -->
		<link rel= "icon" href= "Images\EscPol.png">	<!-- Ícono que se muestra en el titulo de la pestaña -->
		<link rel = "stylesheet" href = "css/nivo-slider.css">	<!-- Enlaza el formato nivo creado en CSS -->
		<link rel = "stylesheet" href = "css/my-slider.css">	<!-- Enlaza el formato nivo creado en CSS -->
		<link rel = "stylesheet" href = "themes/default/default.css">	<!-- Enlaza el formato nivo creado en CSS -->
		<script src = "js/jquery-3.1.1.min.js"></script>	<!-- Se utiliza para insertar o hacer referencia a un script ejecutable dentro de un documento HTML, hace referencia a archivos JavaScript-->
		<script src = "js/jquery.nivo.slider.js"></script>	<!-- Hace referencia a documentos JavaScript -->

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
			
			

			<br>	<!-- Salto de renglón -->

			<section class="ini">
				<div class="login-box">
				<h2>Registrarse</h2>
					<form action="conexion_re.php" method="POST">
						<div class="user-box">
							<p>Usuario</p>
							<br>
						<input type="number" placeholder="Ingrese clave de servidor público" name="usu" required>
						</div>

						<div class="user-box">
							<p>Email</p>
							<br>
							<input type="text" placeholder="Ingrese su correo institucional" name="correo" required>
						</div>


						<div class="user-box">
						<p>Contraseña</p>
						<br>
						<input type="password" placeholder="Ingrese su contraseña" name="contra" required>
						</div>

						<input class="btn btn-primary active" type="submit" value="Registrarse">
					</form>
				</div>
			</section>


		</div>

		<!-- ------------------------------------------------------------ -->
			


		

		<!-- ------------------------------------------------------------ -->
		<div class = "clear"></div>	<!-- Elemento creado sirve para comenzar con un nuevo orden de elementos -->

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