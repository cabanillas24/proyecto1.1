<?php
	
	$conexion=mysqli_connect('localhost','root','password','agenda_medica');
?>
  <?php
if (!isset($_COOKIE['sesion'])){
  header("location: login.php");
}
/* if ($_COOKIE['sesion'] != "token") {
  header("location: login.php");
  
 }*/


?>

<!DOCTYPE html>
<html>
<head>
  	<title>citas</title>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/vercitas.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/32f69680ca.js" crossorigin="anonymous"></script>
  </head>
</head>
<body>

	<header>
      <nav>
        <ul>
          <img src="../imagenes/....png" class="logo">
          <a href="../index.php" class="bottonh">Home</a>
          <a href="create_appointment.php" class="bottonh">Query</a>
          <a href="aboutus.php" class="bottonh">About us</a>
          <a href="perfil.php" class="logout">Profile</a>
        </ul>
      </nav>
    </header>

    <div>
		<h1 class="mid1">  <span> <i class="fas fa-notes-medical"></span></i> Your apoiments</h1>  
	</div>

	<div class="container mid">
		<table style="text-align: center" class="letrasP">
			<tr class="letras">
				<td>DOCTOR</td>
				<td>DATE</td>
				<td>HOUR</td>
			</tr>
		<?php
			$datos=$_COOKIE["sesion"];
			$datos=json_decode($datos);

			$ID=$datos[0]->Id_Paciente;

			$sql="SELECT citas.Id_Cita, medicos.Nombre, citas.Fecha, citas.Hora FROM citas LEFT JOIN medicos ON citas.Id_Medico=medicos.Id_Medico where Id_Paciente=$ID AND Fecha>=CURDATE() ORDER BY Fecha;";
			$result=mysqli_query($conexion,$sql);
			while($mostrar=mysqli_fetch_array($result)){
				?>
				<tr>
					<td><?php echo $mostrar['Nombre']?></td>
					<td><?php echo $mostrar['Fecha']?></td>
					<td><?php echo $mostrar['Hora']?></td>
					<td><a href="../controller/eliminar.php?id=<?php echo $mostrar['Id_Cita']?>" class='botton2 zoom' name='delete'>Delete</a>
						<a href="../model/pdf.php?id=<?php echo $mostrar['Id_Cita']?>" class='botton3 zoom'>PDF</a></td>
				</tr>
				<?php
			}
		?>
		</table>
<br><br><br>
	<a href="perfil.php" class="botton1">Back</a>
	<a href="citas0.php" class="botton1" style="float: right;">Reload page</a>
	<a href="citasc.php" class="botton4" style="float: right;">View canceled appointments</a>
	</div>



	<div class="jumbotron text-center final" style="margin-bottom:0">
      <img src="../imagenes/....png" class="logo">
      <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021. Derechos asociados y reservados por la clínica S.A de C.V.</p>
    </div>

    

</body>
</html>
