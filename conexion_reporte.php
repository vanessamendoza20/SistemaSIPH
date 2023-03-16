<?php

$server = "localhost"; //servidor con el que se esta trajando
$user = "vanessa"; //usuario que tiene la base de datos a cargo
$pass = "123"; // contraseña del usuario
$bd = "siph"; // nombre de la base de datos con la que se estrara trabajando

$conn = mysqli_connect($server, $user, $pass, $bd); //crear una conexión con una base de datos concreta

?>