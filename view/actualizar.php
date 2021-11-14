<?php
if (!isset($_COOKIE['sesion'])){
  header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>actualizar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/32f69680ca.js" crossorigin="anonymous"></script>

	<link rel="stylesheet"  href="../css/estilocitas.css">
</head>
<body>
	<header><!--BARRA DE NAVEGACION-->
			<nav class="barra">
				<ul>
					<img src="../imagenes/....png" class="logo">
					<a href="../index.php" class="bottonh">Home</a>
					<a href="create_appointment.php" class="bottonh">Query</a>
					<a href="aboutus.php" class="bottonh">About us</a>
					<a href="#" class="logout">Profile</a>
				</ul>
			</nav>
	</header>
<br>
		<div id="your" >
			<h1 id="c" style="text-align: center;" > <span> <i class="fas fa-user-edit"></i> </span>  Modify your information</h1>  
		</div>


		<div id="container" >
			  <div class="row">
			  		<div class="col-1"></div>

				    <div class="col-3">
				    	<br>
					     <span class="input-group-text">Name</span>
					     <span class="input-group-text">Last Name</span>
					     <span class="input-group-text">Email</span>
					     <span class="input-group-text">Password</span>
					     <span class="input-group-text">Birthday</span>
					     <span class="input-group-text">Genere</span>
					     <span class="input-group-text">Type blood</span>
					     <span class="input-group-text">Weigth</span>
					     <span class="input-group-text">Height</span>
					     <span class="input-group-text">Allergy</span>
					     <span class="input-group-text">Disaeses</span>
					     <span class="input-group-text">Adrees</span>
					     <span class="input-group-text">Celphone number</span>
					     <span class="input-group-text">Homephone</span>
					     <span class="input-group-text">Accidents</span>
				    </div>
				    	
				    <div class="col-7">
				    	<br>

						<input type="text" class="form-control" id="name" placeholder="Enter your name">
				    	<input type="text" class="form-control" id="last" placeholder="Enter your Last Name" >
				    	<input type="email" class="form-control" id="email" placeholder="Email" >
				        <input type="password" class="form-control" id="password" placeholder="Enter your password">
				    	<input type="date" class="form-control" id="b" placeholder="Enter your Birthday for example: 2001/08/29">
				    	<input type="text" class="form-control" id="genere" placeholder="Enter your Genere F or M ">
						<input type="text" class="form-control" id="tblood" placeholder="Enter your type blood">
						<input type="float" class="form-control" id="weigth" placeholder="Enter your Weigth">
						<input type="float" class="form-control" id="height" placeholder="Enter your Height">
						<input type="text" class="form-control" id="allergy" placeholder="Enter your Allergy">
						<input type="text" class="form-control" id="disaeses" placeholder="Enter your disaeses"> 
						<input type="text" class="form-control" id="adres" placeholder="Enter your address">
						<input type="tel" class="form-control" id="cp" placeholder="Enter your cellphone">
						<input type="tel" class="form-control" id="hp"placeholder="Enter your Homephone">
				    	<input type="text" class="form-control" id="ac"placeholder="Enter your Accidents">
				    </div>
				    
    
 			</div>
			<br>
 				<button type="button" class="btn btn-secondary btnr" id="up" >Update</button>
		</div>
<br>
<br>
	<div class="jumbotron text-center final" style="margin-bottom:0">
		<img src="../imagenes/....png" class="logo">
		<p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021. Derechos asociados y reservados por la clínica S.A de C.V.</p>
	</div>



<script>
	/*JQUERY ENVIO DE DATOS*/

	$(document). ready(function(){
		$("#up").click(function(){

		    var id  = $("#id").val();
			var name  = $("#name").val();
			var last  = $("#last").val();
			var email  = $("#email").val();
			var password  = $("#password").val();
			var b  = $("#b").val();
			var genere  = $("#genere").val();
			var tblood  = $("#tblood").val();
			var weigth = $("#weigth").val();
			var height  = $("#height").val();
			var allergy  = $("#allergy").val();
			var disaeses  = $("#disaeses").val();
			var adres  = $("#adres").val();
			var cp  = $("#cp").val();
			var hp  = $("#hp").val();
			var ac  = $("#ac").val();





      		if (id == "" || name == "" || last == "" || email == "" || password == "" || b == "" || genere == "" || tblood  == "" || weigth == "" || height == "" || allergy == "" || disaeses == "" || adres == "" || cp == "" || hp  == "" || ac  == "") {
      			alert('Por favor llene todos los campos');
      		}
      		else
      		 {
      		  $.post("../controller/actualizarcontrolador.php",
    		    {
			          id: id,
			          name: name,
			          last: last,
			          email: email,
			          password: password,
			          b: b,
			          genere: genere,
			          tblood: tblood,
			          weigth: weigth,
			          height: height,
			          allergy: allergy,
			          disaeses: disaeses,
			          adres: adres,
			          cp: cp,
			          hp: hp,
			          ac: ac,
       			 },
				 function(data, status){

				 	var obj = JSON.parse(data);
				 	$obj = JSON.parse(data);
				 	if (obj == false) {
				 	 alert("No hay cambios que realizar o no se encotro al cliente");
				 	}
				 	else if (obj == true) {
				 		alert("Datos cambiados")
				 	}
				 	else{
				 		alert("Error registrado ")
				 	}
				 });
      	       }
      	   });
		});




</script>


</body>
</html>










