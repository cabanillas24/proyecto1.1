<?php
if (!isset($_COOKIE['sesion'])){
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create appointment</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/create.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
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

	<h4 class="consultation fontf title1">Reason for consultation</h4>

	<br><br>

	<div class="container mid"><!--CONTAINER -->	<br>  	 
		<h5 class="consultation fontf title2">Reason for your inquiry:</h5>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
	  			<textarea class="form-control" placeholder="Describe the reason for your inquiry." rows="1" id="razon" name="razon" required></textarea>
			</div>
			<div class="col"></div>
		</div>

		<br><br>

		<h5 class="consultation fontf title2">Select the day of your appointment</h5>
		
		<input id="fecha" name="fecha" type="date" class="fecha fontf form-group"  required><!--SELECTOR DE LA FECHA-->
		

		<h5 class="consultation fontf title2">Select your appointment time</h5>
		
		<input id="hora" name="hora" type="time" class="fecha fontf form-group1" required><!--SELECTOR DE LA HORA-->

		<br><br>

		<h5 class="consultation fontf title2">Select the doctor´s id</h5>
		<div class="iddoc"><!--SELECTOR DE ID MEDICO-->
			<select class="fecha fontf" id="id_medico" required>
				<optgroup label="Carlos" class="doc">
					<option>1</option>
				</optgroup>
				<optgroup class="docf"></optgroup>
				<optgroup label="Jose" class="doc">
					<option>2</option>
				</optgroup>
				<optgroup class="docf"></optgroup>
				<optgroup label="Miguel" class="doc">
					<option>3</option>
				</optgroup>
				<optgroup class="docf"></optgroup>
				<optgroup label="Pedro" class="doc">
					<option>4</option>
				</optgroup>
			</select>
		</div>

		<br><br>

		<a href="../index.php" class="botton1">Back</a>
		<a href="citas0.php" class="botton2" id="register" name="register">Create appointment</a>

		<br><br><br>

	</div> 

	<br><br><br>

	<div class="jumbotron text-center final" style="margin-bottom:0"><!--BARRA INFERIOR-->
		<img src="../imagenes/....png" class="logo">
		<p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021. Derechos asociados y reservados por la clínica S.A de C.V.</p>
	</div>



	<script>

	  $("#register").click(function(){

	    var razon1 = document.getElementById('razon').value;
	    var fecha1 = document.getElementById('fecha').value;
		var hora1 = document.getElementById('hora').value;
	    var medico1 = document.getElementById('id_medico').value;

	    if (razon1 === "" || fecha1 === "" || hora1 === "") {

	    	alert('Todos los campos son requeridos');

	    }else{

	    	$.post("../controller/create_appointment.php",
	      {
	        razon: razon1,
	        fecha: fecha1,
	        hora: hora1,
	        medico: medico1
	      },
	      function(data, status){
	        console.log(status);
	        console.log(data);
	      });
	    }
	    
	    });

	</script>



</body>
</html>		
