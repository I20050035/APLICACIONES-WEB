<?php 


$nombre=$_GET["nombre"];
$apellidoPaterno=$_GET["paterno"];
$apellidoMaterno=$_GET["materno"];
$correo=$_GET["correo"];
$telefono=$_GET["telefono"];
$nss=$_GET["nss"];
$curp=$_GET["curp"];




$servername = "localhost";
$username = "root";
$password = "";
$dbName= "persona";
$conn = mysqli_connect($servername, $username, $password,$dbName);

if ($conn -> connect_error) 
{
  die("Connection failed: " . $conn -> connect_error);
}

$sql = "INSERT INTO datospersona(nombre,apellidoPaterno,apellidoMaterno,correo,telefono,nss,curp) 
VALUES ('$nombre','$apellidoPaterno','$apellidoMaterno','$correo','$telefono','$nss','$curp')";




if ($conn ->query($sql) === TRUE ) 
{
 $conn->close();
 header("Location:http://localhost/web/TESTBD/verTabla.php");
 exit(); 
}
else
{
   echo "Error: " .$sql. "<br>". $conn->error;
   $conn->close(); 
}

?>