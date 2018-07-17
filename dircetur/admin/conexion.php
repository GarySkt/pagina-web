<?php
function conectarse()
{
//conectar con el servidor de base de datos
if(!($link = mysql_connect("localhost", "root", "")))
{
	echo "Error conectando a la Base de Datos.";
	exit();
}

if(!mysql_select_db("db_dircetur", $link))
	{
		echo "Error seleccionando Base de Datos.";
		exit();
	}
	return $link;
}
?>