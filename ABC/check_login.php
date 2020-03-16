<?php

	require_once('include/configdb.php');

	if(isset($_REQUEST['user'])){
		$user = $_REQUEST['user'];	
	}
	else{
		$user = "";
	}

	if(isset($_REQUEST['pass'])){
		$pass = $_REQUEST['pass'];
	}
	else{
		$pass = "";
	}

	$query = "SELECT * FROM users WHERE nombre = '".$user."' and password = '".$pass."'";

	$resultado = $dbc -> query($query);

	if($resultado -> num_rows == 1){
		http_response_code(200);
	}
	else{
		http_response_code(401);
	}
?>