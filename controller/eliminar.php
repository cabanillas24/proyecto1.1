<?php
include ("../model/conn.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM citas WHERE Id_Cita = '$id'";

$Reliminar = mysqli_query($conexion,$eliminar);

if ($Reliminar){
	header("Location: ../view/citas0.php");
}else{
	echo "<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}

?>