<?php
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=db_dircetur','root','');
	} catch (PDOException $e) {
		echo "ERROR: ".$e->getMessage();
	}
?>