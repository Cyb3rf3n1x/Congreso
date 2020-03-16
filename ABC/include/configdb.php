<?php
	
	require_once ("constantes.php");
	$conHost = DBHOST.":".DBPORT;
	
	//establecer la conexión a la BD
	$dbc = new mysqli($conHost, DBUSER, DBPWD, DBNAME);
	
	//validar la conexión establecida
	if($dbc->connect_error){
		die("Error de conexión: " . $dbc->connect_error);
	}
?>