<?php
include("../admin/conexcion.php");
$usuario=$_POST['usuario'];
$password=$_POST['password'];

conectarse();

$query = "SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena= '$password'";

$result = mysql_query($query);

$row = mysql_fetch_assoc($result);

if($row){
	session_start();
	$_SESSION['usuario'] = array('nom' => $row['nombres']);
	header("Location:index.php");
}
else{
	header("Location: ../admin/login/login.php?error=si");
}

mysql_free_result($rs);
mysql_close($conn);


?>