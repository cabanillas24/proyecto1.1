<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$b = $_POST['b'];
	$genere = $_POST['genere'];
	$tblood = $_POST['tblood'];
	$weigth = $_POST['weigth'];
	$height = $_POST['height'];
	$allergy = $_POST['allergy'];
	$disaeses = $_POST['disaeses'];
	$adres = $_POST['adres'];
	$cp = $_POST['cp'];
	$hp = $_POST['hp'];
	$ac = $_POST['ac'];

	require_once("../model/conexionlogin.php");
	$obj = new Conection();
	$resultado= $obj->actualizar($id,$name,$last,$email,$password,$b,$genere,$tblood,$weigth,$height,$allergy,$disaeses,$adres,$cp,$hp,$ac);

	echo json_encode($resultado);


}