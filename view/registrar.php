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
				</ul>
			</nav>
	</header>
<br>
		<div id="your" >
			<h1>Create your profile</h1>  
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

						<input type="text" class="form-control" id="n" placeholder="Enter your name">
				    	<input type="text" class="form-control" id="l" placeholder="Enter your Last Name" >
				    	<input type="email" class="form-control" id="e" placeholder="Email" >
				        <input type="password" class="form-control" id="p" placeholder="Enter your password">
				    	<input type="date" class="form-control" id="bi" placeholder="Enter your Birthday for example: 2001/08/29">
				    	<input type="text" class="form-control" id="g" placeholder="Enter your Genere F or M ">
						<input type="text" class="form-control" id="t" placeholder="Enter your type blood">
						<input type="text" class="form-control" id="w" placeholder="Enter your Weigth">
						<input type="text" class="form-control" id="h" placeholder="Enter your Height">
						<input type="text" class="form-control" id="a" placeholder="Enter your Allergy">
						<input type="text" class="form-control" id="d" placeholder="Enter your disaeses"> 
						<input type="text" class="form-control" id="ad" placeholder="Enter your address">
						<input type="text" class="form-control" id="c" placeholder="Enter your cellphone">
						<input type="text" class="form-control" id="ho"placeholder="Enter your Homephone">
				    	<input type="text" class="form-control" id="acc"placeholder="Enter your Accidents">
				    </div>
				    <div class="col-1">
				    	
				    </div>

				    
    
 			</div>
 				<a type="button" class="btnr" id="re" >Register</a>
          		<a href="login.php" type="button" class="btnl" id="log" >Login</a>
		</div>
	<div class="jumbotron text-center final" style="margin-bottom:0">
		<img src="../imagenes/....png" class="logo">
		<p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021. Derechos asociados y reservados por la clínica S.A de C.V.</p>
	</div>

<script>

  $("#re").click(function(){
    
    var n = document.getElementById('n').value;
    var l = document.getElementById('l').value;
    var e = document.getElementById('e').value;
    var p = document.getElementById('p').value;
    var bi = document.getElementById('bi').value;
    var g = document.getElementById('g').value;
    var t = document.getElementById('t').value;
    var w = document.getElementById('w').value;
    var h = document.getElementById('h').value;
    var a = document.getElementById('a').value;
    var d = document.getElementById('d').value;
    var ad = document.getElementById('ad').value;
    var c = document.getElementById('c').value;
    var ho = document.getElementById('ho').value;
    var acc = document.getElementById('acc').value;


    $.post("../controller/registrocontrolador.php",
    {


			 
			          n: n,
			          l: l,
			          e: e,
			          p: p,
			          bi: bi,
			          g: g,
			          t: t,
			          w: w,
			          h: h,
			          a: a,
			          d: d,
			          ad: ad,
			          c: c,
			          ho: ho,
			          acc: acc,

    },
    function(data, status){
      console.log(status);
      console.log(data);
    });
  });

</script>


</body>
</html>
