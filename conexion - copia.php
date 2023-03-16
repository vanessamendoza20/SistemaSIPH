<?php
$server = "localhost";
$user = "vanessa";
$pass = "123";
$bd = "siph";

$conn = mysqli_connect($server, $user, $pass, $bd);

$fecha = $_POST['fecha'];
$hechos = $_POST['hechos'];



$sqlTabla1 = "INSERT INTO puesta_dis(fecha, hechos) VALUES('$fecha', '$hechos')";


$ejecutar = mysqli_query($conn, $sqlTabla1);

    if ($ejecutar == 1) {

    	$ap_sp = $_POST['ap_sp'];
		$am_sp = $_POST['am_sp'];
		$nom_sp = $_POST['nom_sp'];
		$inst = $_POST['inst'];

    	$sqlTabla2 = "INSERT INTO servidor_pub(ap_sp, am_sp,nom_sp, inst) 
    								VALUES('$ap_sp', '$am_sp', '$nom_sp', '$inst')";

    	$ejecutar2 = mysqli_query($conn, $sqlTabla2);
    }
    if ($ejecutar2 == 1) {

    	$ente = $_POST['ente'];

      	$sqlTabla3 = "INSERT INTO denuncia(ente) VALUES('$ente')";

      	$ejecutar3 = mysqli_query($conn, $sqlTabla3);
      }  
    if ($ejecutar3 == 1) {

    	$calle = $_POST['calle'];
		$numex = $_POST['numex'];
		$numin = $_POST['numin'];
		$cp = $_POST['cp'];
		$col = $_POST['col'];
		$muni = $_POST['muni'];
		$ref = $_POST['ref'];

     	$sqlTabla4 = "INSERT INTO intervencion(calle, numex, numin, cp, col, muni, ref) 
     								VALUES('$calle', '$numex', '$numin', '$cp', '$col', '$muni', '$ref')";

     	$ejecutar4 = mysqli_query($conn, $sqlTabla4);
     }
    if ($ejecutar4 == 1) {

    	$ap_pd = $_POST['ap_pd'];
		$am_pd = $_POST['am_pd'];
		$nom_pd = $_POST['nom_pd'];
		$apodo = $_POST['apodo'];
		$naci = $_POST['naci'];
		$sexo = $_POST['sexo'];
		$calle_pd = $_POST['calle_pd'];
		$numex_pd = $_POST['numex_pd'];
		$numin_pd = $_POST['numin_pd'];
		$cp_pd = $_POST['cp_pd'];
		$col_pd = $_POST['col_pd'];
		$muni_pd = $_POST['muni_pd'];
		$desc_pd = $_POST['desc_pd'];

     	$sqlTabla5 = "INSERT INTO persona_det(ap_pd, am_pd,nom_pd, apodo, naci, sexo, calle_pd, numex_pd, numin_pd, cp_pd, col_pd, muni_pd, desc_pd) 
     		VALUES('$ap_pd', '$am_pd', '$nom_pd', '$apodo', '$naci', '$sexo', '$calle_pd', '$numex_pd', '$numin_pd', '$cp_pd', '$col_pd', '$muni_pd', '$desc_pd')";

     	$ejecutar5 = mysqli_query($conn, $sqlTabla5);
     }
     if ($ejecutar5 == 1) {
     	$mensaje = "Datos ingresados correctamente";
		echo "<script>";
		echo "alert('$mensaje');";  
		echo "window.location = 'seccion1.php';";
		echo "</script>";
     }
     else{
        echo '<script>
        alert("Error, Inténtalo de nuevo");
        </script>';
    }
?>