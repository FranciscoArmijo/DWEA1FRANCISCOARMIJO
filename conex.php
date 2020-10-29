<?php
function Conectarse()
{
	if (!($link=mysql_connect("localhost","root","")))
	{
		echo "No se pudo conectar al servidor";
		exit();
	}
	if (!mysql_select_db("bdd_franciscoarmijo",$link))
	{
		echo "No se pudo conectar a la base de datos". mysql_error();
		exit();
	}
	return $link;
}
?>
