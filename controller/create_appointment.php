<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

	$Motivo = $_POST['razon'];
	$Fecha = $_POST['fecha'];
	$Hora = $_POST['hora'];
	$Id_Medico = $_POST['medico'];

	require_once("../model/conexionlogin.php");
	$obj = new Conection();
	$resultado = $obj -> insertcita($Fecha,$Hora,$Id_Medico,$Motivo);
	echo json_encode(["estado" => $resultado]);
	header("Location: ../view/citas0.php");
	

}