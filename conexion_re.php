<?php
$server = "localhost"; //servidor con el que se esta trajando
$user = "vanessa"; //usuario que tiene la base de datos a cargo
$pass = "123"; // contraseña del usuario
$bd = "siph"; // nombre de la base de datos con la que se estrara trabajando

$conn = mysqli_connect($server, $user, $pass, $bd); //crear una conexión con una base de datos concreta

$usu = $_POST['usu']; // variables que seran guardadas en la tabla correspondiente
$correo = $_POST['correo']; // variables que seran guardadas en la tabla correspondiente
$contra = $_POST['contra']; // variables que seran guardadas en la tabla correspondiente



$sql="INSERT INTO usuarios (usu, correo, contra) VALUES ('".$usu."', '".$correo."', '".$contra."')"; //insertar los datos en la tabla seleccionada

if($conn->query(($sql))){ // si los datos fueron correctos mandara un mensaje y redirecionara al login
		$mensaje = "¡Registro satisfactorio!";
		echo "<script>";
		echo "alert('$mensaje');";  
		echo "window.location = 'login.php';";
		echo "</script>";
}
    else{ // de lo contrario saldra un mensaje de intentarlo de nuevo
        echo '<script>
        alert("Error, Inténtalo de nuevo");
        </script>';
    }
?>