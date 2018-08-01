<?php
	$conectar = @mysql_connect('localhost','root','');
	if (!$conectar){
		echo "No se pudo conectar con el servidor";
	}else{
		$base=mysql_select_db('db_dircetur');
		if (!$base) {

			echo "No se encontro la base de datos.";
		}
	}
	//recuperar variables
	$facebook=$_POST['facebook'];
	$youtube=$_POST['youtube'];
	$twitter=$_POST['twitter'];

	$sql = "INSERT INTO social_networks ('$facebook','$youtube','$twitter')";

	$ejecutar = mysql_query($sql);

	//verificar ejecucion
	if (!$ejecutar) {
		echo "Algo paso con la ejecucion de la consulta";
		# code...
	}else{
		echo "Datos guardados correctamente <br> <a href='index.php'>Volver</a>";
	}

?>