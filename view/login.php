
<!DOCTYPE html>
<html>
<head>
	<title>Inicia sesion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet"  href="../css/estilologin.css">

</head>
<body>
<header>
      <nav class="barra">
        <ul>
          <img src="../imagenes/cc.png" class="logo">
          <a href="../index.php" class="bottonh">Home</a>
          <a href="create_appointment.php" class="bottonh">Query</a>
          <a href="aboutus.php" class="bottonh">About us</a>
        </ul>
      </nav>
  </header>

	<br>


	   	
		   	<img src="../imagenes/....png" class="mx-auto d-block" width="200" align="center">
	<br> 

			<div id="container">
						<br>
						<h1 id="welcome" > W E L C O M E </h1>
				
			            <div class="form-group">
			            	<div id="error" ></div>
							<label class="c1">Correo: </label>  <input class="c1.1" type="email" name="corre" placeholder="Introduzca su E-mail" required=true id="corre"><br></br>
							<label class="c2">Password:</label> <input class="c2.2" type="password" name="passwor" placeholder="Introduzca su Password" minlength="50" required=true id="passwor" ><br></br><br>
	             			
	             			<a href="registrar.php" type="button" class="btn btn-outline" id="sign" >Sign up</a> 
	             			<a href="loginm.php" style="margin-left: 130px;" type="button" class="btn btn-outline" id="sign" >Medic</a> 
	             			<button type="button" class="btn btn-outline" id="log" >Login</button>
	             		</div>
			</div>

	<div class="jumbotron text-center final" style="margin-bottom:0">
		<img src="../imagenes/cc.png" class="logo">
		<p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021 Axolotl Developers. Derechos asociados y reservados por la clínica Chacón S.A de C.V.</p>
	</div>



<script>
	/*JQUERRY ENVIO DE DATOS SEGUROS*/
	$(document). ready(function(){
		$("#log").click(function(){
     		var corre = $("#corre").val();
      		var passwor = $("#passwor").val();

      		if (corre == "" || passwor == "") {
      			$("#error").text("*Campos vacios");
      			$("#error").css("color","red");
      			$("#error").css("text-align","center");
      		}
      		else
      		 {
      		  $.post("../controller/logincontrolador.php",
    		    {
			          corre: corre,
			          passwor: passwor
       			 },
				 function(data, status){

				 	var obj = JSON.parse(data);

				 	if (obj.estado == true) 
				 	{
				 	 window.location.replace("perfil.php");
				 	}
				 	else if (obj.estado == false) {
				 		$("#error").text("*Error al iniciar sesion");
				 		$("#error").css("color","red");
				 		$("#error").css("text-align","center");
				 	}
				 });
      	       }
      	   });
		});

</script>

</body>
</html>
