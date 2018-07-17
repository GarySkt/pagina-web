<?php
include("conexion.php");
$usuario=$_POST['usuario'];
$contrasena=$_POST['password'];

conectarse();

$query = "SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contrasena'";

$result = mysql_query($query);

$row = mysql_fetch_assoc($result);


if($row)
{
	session_start();
	$_SESSION['usuario'] = array('nom' => $row['usuario'], 'ape'=> $row['email']);
	header("Location: index.php");
}
else
{
	header("Location: login/login.php?error=si");
}

mysql_free_result($rs);
mysql_close($conn);
?>