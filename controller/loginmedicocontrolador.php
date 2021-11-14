<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

	$email = $_POST['corre'];
	$password = $_POST['passwor'];

	require_once("../model/conexionlogin.php");
	$obj = new Conection();
	$obj = $obj->loginM($email,$password);

	echo json_encode(["estado"=>$obj]);


}
