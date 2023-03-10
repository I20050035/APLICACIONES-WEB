<?php
$nombre=$_GET["nombre"];
$apellidoPaterno=$_GET["paterno"];
$apellidoMaterno=$_GET["materno"];
$correo=$_GET["correo"];
$telefono=$_GET["telefono"];
$nss=$_GET["nss"];
$curp=$_GET["curp"];


	$cnx = mysqli_connect ("localhost","root","password","dbname");
	$sql = "UPDATE persona set nombre = '$nombre',apellidoPaterno = 
    '$apellidoPaterno',apellidoMaterno = '$apellidoMaterno',correo = '$correo',telefono = '$telefono',nss = '$nss',curp = '$curp' where iddatosPersona like  $iddatosPersona";
	$rta = mysql_query ($cnx, $sql);
		if (!$rta) {
			echo "No se Actualizo!";
		}
		else {
            header("Location: pr.php");
		}
?>