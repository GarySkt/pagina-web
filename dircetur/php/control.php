<?php session_start();
if (isset($_SESSION['usuario'])){
	header('Location:index-principal.php');	
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	require('../admin/conexion.php');
	$consulta = $conexion -> prepare('SELECT * FROM USUARIO WHERE USUARIO=:usuario AND CONTRASENA=:contrasena');
	$consulta -> execute(array(':usuario'=>$usuario, ':contrasena'=>$contrasena));
	$resultado = $consulta -> fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: ../admin/index-principal.php');				

	}else{
		header('Location: admin/login/index-login.php');
	}
}
?>