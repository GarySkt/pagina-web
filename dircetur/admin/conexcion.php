<?php
	function conectarse(){
		if (!($link = mysql_connect("localhost","root",""))) {
			echo "No se pudo conectar con la base de datos. :(";
			exit();
		}
		if (!mysql_select_db("db_dircetur",$link)) {
			echo "Error seleccionando la base de datos. :(";
			exit();
		}
		return $link;
	}
?>