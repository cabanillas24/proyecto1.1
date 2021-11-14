

<?php
if (!isset($_COOKIE['sesion'])){
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>perfil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/32f69680ca.js" crossorigin="anonymous"></script>

	<link rel="stylesheet"  href="../css/estiloperfil.css">

</head>
<body>
	<header><!--BARRA DE NAVEGACION-->
			<nav class="barra">
				<ul>
					<img src="../imagenes/....png" class="logo">
					<a href="../index.php" class="bottonh">Home</a>
					<a href="create_appointment.php" class="bottonh">Query</a>
					<a href="aboutus.php" class="bottonh">About us</a>
					<a href="perfil.php" class="logout">Profile</a>
				</ul>
			</nav>
	</header>

</body>


		<h1 id="your" >Doctor profile</h1>
		<div id="perfil">
			<button id="iconp"type="button" class="btn btn-light" > <i class="fas fa-user-circle"></i></button>
		</div>
		<div id="container1" >
			<br>
			<br>
			<div =p>
					<a href="logout.php" type="button" class="btn btn-secondary" id="salir" type="button" class="btn btn-outline" >
						<p class="caca">Do you want to go out?</p>
						<span> <i class="fas fa-sign-out-alt"></i></span> 
						<br>
						<p class="caca">Log Out</p> </a>
					
					
					<a href="agendadoctor.php" type="button" class="btn btn-secondary" id="citas">
						<P class="caca">Appointment</P>
						<span> <i class="fas fa-notes-medical"></i></span>
						<br><p class="caca">See reports</p>
						</a> 
					
			</div>
		<br>
		<br>
			
		</div>
		
<br>
<br>
	<div class="jumbotron text-center final" style="margin-bottom:0">
		<img src="../imagenes/....png" class="logo">
		<p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021. Derechos asociados y reservados por la clínica S.A de C.V.</p>
	</div>
		
		


</body>
</html>
