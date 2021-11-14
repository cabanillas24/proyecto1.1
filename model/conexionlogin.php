<?php

/*permite realizar la conexion a la bd*/
class Conection{

	public $driver;
	public $host;
	public $user;
	public $password;
	public $database;
	public $conn;

	public function __construct(){

		$this->driver = "mysql";
		$this->host = "localhost";
		$this->user = "root";
		$this->password = "password";
		$this->database = "agenda_medica";

		$this->get_conection();
	}

	public function get_conection(){
		$this->conn = new PDO($this->driver.":"."host=".$this->host.";"."dbname=".$this->database, $this->user, $this->password);

		if (!$this->conn){

			echo "Error al conectar";
		}
		else{
			//secho "Conexion establecida";
		}
	}

 		public function registropacientes($n,$l,$e,$p,$bi,$g,$t,$w,$h,$a,$d,$ad,$c,$ho,$acc){

		$sql = "CALL agenda_medica.sp_registropacientes(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$statement = $this->conn->prepare($sql);

 	 	$statement->bindParam(1,$n);
 	 	$statement->bindParam(2,$l);
 	 	$statement->bindParam(3,$e);
 	 	$statement->bindParam(4,$p);
 	 	$statement->bindParam(5,$bi);
 	 	$statement->bindParam(6,$g);
 	 	$statement->bindParam(7,$t);
 	 	$statement->bindParam(8,$w);
 	 	$statement->bindParam(9,$h);
 	 	$statement->bindParam(10,$a);
 	 	$statement->bindParam(11,$d);
 	 	$statement->bindParam(12,$ad);
 	 	$statement->bindParam(13,$c);
 	 	$statement->bindParam(14,$ho);
 	 	$statement->bindParam(15,$acc);



		if($statement->execute()){
			return "paciente registrado";
		}
		else {
			return "paciente no registrado";
		}
	}






	public function login($email,$password){

		$sql = "CALL agenda_medica.sp_Login(?,?)";
		$statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$email);
    $statement->bindParam(2,$password);

    if($statement->execute()){
        $count=$statement->rowCount();
        $datos = $statement->fetchAll(PDO::FETCH_ASSOC);

			if($count){
            $cookie_name = "sesion";
            /*$cookie_values = "token";*/
            $datos=json_encode($datos);
            setcookie($cookie_name,$datos, time() + (86400*30), "/");
            return true;
        }else{
            return false;
        }

    }
}

public function listar(){
	$datos=$_COOKIE["sesion"];
	$datos=json_decode($datos);

	$ID=$datos[0]->Id_Paciente;

		$sql = "CALL sp_MostrarCitasPacientes(?)";
		$statement = $this->conn->prepare($sql);
		$statement->bindParam(1,$ID);
		/*Ejecuta el procdimiento y arroja 1 o 0 si se ejecuto correctamente*/
		if($statement->execute()){
			/*retorna los registros encontrados*/

			$result = $statement->fetchALL(PDO::FETCH_ASSOC);
			return $result;
		}
	}



	public function insertcita($Fecha,$Hora,$Id_Medico,$Motivo){
		$datos=$_COOKIE["sesion"];
		$datos=json_decode($datos);

		$ID=$datos[0]->Id_Paciente;

	$sql = "CALL sp_AgregarCitas(?,?,?,?,?)";
	$statement = $this -> conn -> prepare($sql);
	$statement -> bindParam(1,$ID);
	$statement -> bindParam(2,$Fecha);
	$statement -> bindParam(3,$Hora);
	$statement -> bindParam(4,$Id_Medico);
	$statement -> bindParam(5,$Motivo);

	if($statement -> execute()){

		return "cita creada";
	}
	else{

		return "cita no creada";
		}
	}


 

 	 public function actualizar($id,$name,$last,$email,$password,$b,$genere,$tblood,$weigth,$height,$allergy,$disaeses,$adres,$cp,$hp,$ac){

 	 	$sql = "CALL agenda_medica.sp_ActualizarPaciente(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 	 	$statement = $this->conn->prepare($sql);

 	 	$datos=$_COOKIE["sesion"];
		$datos=json_decode($datos);

		$ID=$datos[0]->Id_Paciente;

 	 	$statement->bindParam(1,$ID);
 	 	$statement->bindParam(2,$name);
 	 	$statement->bindParam(3,$last);
 	 	$statement->bindParam(4,$email);
 	 	$statement->bindParam(5,$password);
 	 	$statement->bindParam(6,$b);
 	 	$statement->bindParam(7,$genere);
 	 	$statement->bindParam(8,$tblood);
 	 	$statement->bindParam(9,$weigth);
 	 	$statement->bindParam(10,$height);
 	 	$statement->bindParam(11,$allergy);
 	 	$statement->bindParam(12,$disaeses);
 	 	$statement->bindParam(13,$adres);
 	 	$statement->bindParam(14,$cp);
 	 	$statement->bindParam(15,$hp);
 	 	$statement->bindParam(16,$ac);


 	 	 if($statement->execute()){
 	 	 $count=$statement->rowCount();
 	 	 if ($count) {
 	 	 	return true;
 	 	 }
 	 	 else{
 	 	 	return false;
 	 	 }
 	 	 	
 	 	 }
 	 	 else {
 	 	 	return "error";
 	 	 }
 	 }

 	 public function loginM($email,$password){

		$sql = "CALL sp_LoginM(?,?)";
		$statement = $this->conn->prepare($sql);

    $statement->bindParam(1,$email);
    $statement->bindParam(2,$password);

    if($statement->execute()){
        $count=$statement->rowCount();
        $datos = $statement->fetchAll(PDO::FETCH_ASSOC);

			if($count){
            $cookie_name = "sesion";
            /*$cookie_values = "token";*/
            $datos=json_encode($datos);
            setcookie($cookie_name,$datos, time() + (86400*30), "/");
            return true;
        }else{
            return false;
        }

    }
}
  

}

?>
