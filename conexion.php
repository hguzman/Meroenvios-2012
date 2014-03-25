<?php
 
/* Conexion Servidor local*/

$server="";
$usurio="";
$contrasena="";

//conecto con la base de datos
	$db=mysql_connect($server,$usurio,$contrasena);
//selecciono la BBDD 
	mysql_select_db("###",$db);
 ?>