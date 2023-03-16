<?php
	session_start(); //inicia la sesión entre el usuario y el servidor
	session_unset(); //libera todas las variables de sesión actualmente registradas
	session_destroy(); //destruye toda la sesión en lugar de destruir las variables
	header("location:index.php"); //envía los encabezados HTTP y debe ser lo primero que envía el servidor
?>