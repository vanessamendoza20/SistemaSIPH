<?php
$server = "localhost";
$user = "vanessa";
$pass = "123";
$bd = "siph";

$conn = mysqli_connect($server, $user, $pass, $bd);

$fecha_v = $_POST['fecha_v'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$uso = $_POST['uso'];
$placa = $_POST['placa'];


$query = "INSERT INTO vehículo(fecha_v, tipo, marca, modelo, color, uso, placa) VALUES('$fecha_v', '$tipo', '$marca', '$modelo', '$color', '$uso', '$placa')";

$ejecutar = mysqli_query($conn, $query);

    if ($ejecutar) {
    	$mensaje = "Datos ingresados correctamente";
		echo "<script>";
		echo "alert('$mensaje');";  
		echo "window.location = 'bienvenida.php';";
		echo "</script>";

    }else{
        echo '<script>
        alert("Error, Inténtalo de nuevo");
        </script>';
    }

?>