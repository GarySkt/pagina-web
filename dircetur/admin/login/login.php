<?php session_start();
if (isset($_SESSION['usuario'])) {
	header('Location: admin/index.php');
	
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ingresar</title>
	<link rel="icon" type="image/png" href="../../images/escudo.png">
	<link rel="stylesheet" href="../../css/admin-login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

</head>
<body>
	
	<div class="contenedor">

		<!--<svg style="width:120px;height:120px" viewBox="0 0 24 24">
    		<path fill="#fff" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
		</svg>-->

		<img src="../../images/LOGODIRECTUR .png" alt="">

		<form metod="post" action="../../php/control.php">

			<?php
			$error=$_GET['error'];
			if ($error=="si") {

				echo "Usuario y/o password incorrectos";
			}
			?>
			<div class="form-input">
				<input type="text" name="usuario" placeholder="Usuario" required>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Contrasena" required>
			</div>
			<input type="submit" name="submit" value="Ingresar" class="btn-ingresar">
		</form>




		
		
	</div>
	
</body>
</html>