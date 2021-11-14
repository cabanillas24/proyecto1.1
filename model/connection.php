<?php

/*Permite realizar la coneccion a la BD*/
class Connection{

	public $driver;
	public $host;
	public $user;
	public $password;
	public $database;
	public $conn;

	public function __construct(){

		$this -> driver = "mysql";
		$this -> host = "localhost";
		$this -> user = "root";
		$this -> password = "password";
		$this -> database = "agenda_medica";

		$this -> get_connection();
	}

	public function get_connection(){

		$this -> conn = new PDO($this -> driver.":"."host=".$this -> host.";"."dbname=".$this -> database,$this -> user,$this -> password);

		if (!$this -> conn){

			echo "Error al conectar.";
		}
		else{
			echo "Conexion establecida.";
		}
	}


	public function insertcita($Fecha,$Hora,$Id_Medico,$Motivo){

	$sql = "CALL sp_AgregarCitas(?,?,?,?)";
	$statement = $this -> conn -> prepare($sql);
	$statement -> bindParam(1,$Fecha);
	$statement -> bindParam(2,$Hora);
	$statement -> bindParam(3,$Id_Medico);
	$statement -> bindParam(4,$Motivo);

	if($statement -> execute()){

		return "cita creada";
	}
	else{

		return "cita no creada";
		}
	}
}
