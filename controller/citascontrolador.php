<?php

if ($_SERVER['REQUEST_METHOD']=="GET"){
	require_once("../model/conexionlogin.php");
	$obj = new Conection();
	$resultado = $obj->listar();
	echo json_encode($resultado);
}
