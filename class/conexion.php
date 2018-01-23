<?php
class Conectar
{
	public static function conect()
	{
		$conexion = mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("database_name");
		return $conexion;
	}
}
?>
