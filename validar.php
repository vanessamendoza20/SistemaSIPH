<?php

$server = "localhost"; //servidor con el que se esta trajando
$user = "vanessa"; //usuario que tiene la base de datos a cargo
$pass = "123"; // contraseña del usuario
$bd = "siph"; // nombre de la base de datos con la que se estrara trabajando

$conn = mysqli_connect($server, $user, $pass, $bd); //crear una conexión con una base de datos concreta

$usu = $_POST['usu']; // variable del usuario
$contra = $_POST['contra']; //variable de contraseña

session_start(); // inicia la sesión entre el usuario y el servidor
$_SESSION['usu']=$usu; //variable del usuario que inicio sesión

$consulta="SELECT*FROM usuarios where usu='$usu' and contra='$contra'"; //realiza la consulta para verificar que si existen los datos ingresados
$resultado=mysqli_query($conn,$consulta); //ejecuta la consulta sobre la base de datos

$filas=mysqli_num_rows($resultado); //retorna el número de filas del resultado

if($filas){ // si fue encontrada la fila 

    header("location:bienvenida.php"); //entra a la bienvenida

}else{ // de lo contrario

    ?>
    <?php
    include("login.php"); // se queda el el login y mada una alerta de intentarlo de nuevo

    echo '<script>
       alert("Usuario o contraseña incorrectos, vuelva a intentarlo"); 
      </script>';
}
mysqli_free_result($resultado); //libera la memoria asociada con el resultado
mysqli_close($conn); // cierra una conexión de base de datos previamente abierta

?>