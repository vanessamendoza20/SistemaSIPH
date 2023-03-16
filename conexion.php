<?php
$server = "localhost";
$user = "vanessa";
$pass = "123";
$bd = "siph";

$conn = mysqli_connect($server, $user, $pass, $bd);

$fecha = $_POST['fecha'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$nom_pol = $_POST['nom_pol'];
$poli = $_POST['poli'];
$ente = $_POST['ente'];
$calle = $_POST['calle'];
$numex = $_POST['numex'];
$numin = $_POST['numin'];
$cp = $_POST['cp'];
$col = $_POST['col'];
$muni = $_POST['muni'];
$ref = $_POST['ref'];


$sql="INSERT INTO informe (fecha, ap, am, nom_pol, poli, ente, calle, numex, numin, cp, col, muni, ref) VALUES ('".$fecha."', '".$ap."', '".$am."', '".$nom_pol."', '".$poli."', '".$ente."', '".$calle."', '".$numex."', '".$numin."', '".$cp."', '".$col."', '".$muni."', '".$ref."')";

if($conn->query(($sql))){
	echo ("Registro exitoso");
}else{
	echo ("Fallo la conexion");
}

?>