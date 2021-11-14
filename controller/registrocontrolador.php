<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

	$n = $_POST['n'];
	$l = $_POST['l'];
	$e = $_POST['e'];
	$p = $_POST['p'];
	$bi = $_POST['bi'];
	$g = $_POST['g'];
	$t = $_POST['t'];
	$w = $_POST['w'];
	$h = $_POST['h'];
	$a = $_POST['a'];
	$d = $_POST['d'];
	$ad = $_POST['ad'];
	$c = $_POST['c'];
	$ho = $_POST['ho'];
	$acc = $_POST['acc'];

	require_once("../model/conexionlogin.php");
	$obj = new Conection();
	$resultado = $obj->registropacientes($n,$l,$e,$p,$bi,$g,$t,$w,$h,$a,$d,$ad,$c,$ho,$acc);
	echo json_encode(["estado"=>$resultado]);
}