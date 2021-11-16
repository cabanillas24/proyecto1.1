<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>

	<header>
		<!--! BARRA DE NAVEGACION -->
		<nav class="barra">
			<ul>
				<img src="imagenes/cc.png" class="logo">
				<a href="index.php" class="bottonh">Home</a>
				<a href="view/create_appointment.php" class="bottonh">Query</a>
				
				<a href="view/aboutus.php" class="bottonh">About us</a>
				<a href="view/login.php" class="logout">Login</a>
			</ul>
		</nav>
	</header>

	<div class="container button-container">
		<img src="imagenes/G.jpg" class="H">
		<a href="view/create_appointment.php" class="fontf">Schedule your appointment now</a>
	</div>



	<div class="container1">
		<a href="view/medicos.php" class="H1 Poss">Doctors
			<img src="imagenes/H1.png" class="md">
		</a>
		
	</div>


	<div class="jumbotron text-center final" style="margin-bottom:0">
		<!--BARRA INFERIOR-->
		<img src="imagenes/cc.png" class="logo">
		<p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021 Axolotl Developers. Derechos asociados y
			reservados por la clínica Chacón S.A de C.V.</p>
	</div>

	<script>
		/*JQUERRY ENVIO DE DATOS SEGUROS*/
		$(document).ready(function () {
			$("#log").click(function () {
				var corre = $("#corre").val();
				var passwor = $("#passwor").val();

				if (corre == "" || passwor == "") {
					$("#error").text("Campos vacios");
					$("#error").css("color", "red");
				}
				else {
					$.post("../controller/logincontrolador.php",
						{
							corre: corre,
							passwor: passwor
						},
						function (data, status) {

							var obj = JSON.parse(data);

							if (obj.estado == true) {
								window.location.replace("citas.php");
							}
							else if (obj.estado == false) {
								$("#error").text("Error al iniciar sesion");
								$("#error").css("color", "red");
							}
						});
				}
			});
		});

	</script>

</body>
</html>