<!DOCTYPE html>
<html>
<head>
<style>
header nav {            /*CLASE PARA LA BARRA DE NAVEGACION*/
    background:rgba(128, 0, 128, .8);
    margin-bottom:30px;
    height: 70px;
    padding:17px;
}
@font-face{
    font-family: gothic;
    src: url(../css/GOTHIC.ttf);
}                               /*CLASE PARA LA FUENTE*/
.fontf{                 
    font-family: gothic;
}



.bottonh{       /*CLASE PARA LOS BOTONES DE LA BARRA DE NAVEGACION*/
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 20px;
    -webkit-text-fill-color: white;
    font-family: gothic;
}
.logout{      /*CLASE PARA EL BOTON LOGIN DE LA BARRA DE NAVEGACION*/
    padding: 1px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 20px;
    -webkit-text-fill-color: white;
    font-family: gothic;
    float: right;
}
.logo{      /*CLASE PARA EL LOGO DE LA BARRA DE NAVEGACION*/
    width: 50px;
}
.final{
    background: #202020 !important;
    border-radius: 0px !important;
}

.botonera {
  display: flex;
  justify-content: space-between;

  width: 100%;
}

.divtable{
  border-radius: 15px;

  background-color: #e5e5e5;
  padding: 1em;
  margin: 4em 0 8em 20em;
  width: 600px;
  position: relative;
  text-align: center;
   margin-left: 600px !important; 
}
table{

  font-family: gothic;
  border-collapse: collapse;
  width: 100%;
  
}
table.center{
  margin-left: auto;
  margin-right: auto;
}




td, th {
  border: 1px solid #DCDCDC;
  text-align: left;
  padding: 8px;
}
.bottonh{   /*CLASE PARA LOS BOTONES DE LA BARRA DE NAVEGACION*/
    padding: 5px;
    padding-left: 10px;
    padding-right: 10px;
    font-size: 20px;
    -webkit-text-fill-color: white;
    font-family: gothic;
}

tr:nth-child(even){
  background-color: #848484;
}



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;

}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: ;
}

.active {
    background-color: #4CAF50;
}
</style>

 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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


<?php
  $conexion=mysqli_connect('localhost','root','password','agenda_medica');
  
  ?>
<div class ="divtable">
<table class ="center" style="width:100%  " class="table table-striped">
    <caption style="color: black "><FONT SIZE=5><strong>Women filter </strong></FONT>
    <img  src="../imagenes/docs.png"  align="left" alt="docs.png" width="40" height="40" top: 100px ></caption>
  
     
    <thead>
    <tr>
            <td class="table-active"><h5>Last Name</h5></td>
            <td class="table-active"><h5>Name</h5></td>
            <td class="table-active"><h5>Email</h5></td>
            <td class="table-active"><h5>Cell Phone</h5></td>
            <td class="table-active"><h5>Gender</h5></td>
        </tr>
        
          <?php

         
            $sql="SELECT Apellidos, Nombre, Email, Tel_Celular,Genero FROM pacientes WHERE Genero = 'F';";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
              ?>
              <tr>
                <td class="table-success"><?php echo $mostrar['Apellidos']?></td>
                <td class="table-success"><?php echo $mostrar['Nombre']?></td>
                <td class="table-success"><?php echo $mostrar['Email']?></td>
                <td class="table-success"><?php echo $mostrar['Tel_Celular']?></td>
                <td class="table-success"><?php echo $mostrar['Genero']?></td>
              </tr>
<?php
  }
?>
</table>
<div class="botonera">
    <a href="agendadoctor.php"><input type="button" value="Back"></a>

<a href="javascript:window.print()"><input type="button" value="Print"></a>
</div>



</div>

</body>
<div class="jumbotron text-center final" style="margin-bottom:0"><!--BARRA INFERIOR-->
        <img src="../imagenes/....png" class="logo">
        <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021. Derechos asociados y reservados por la clínica S.A de C.V.</p>
    </div>
</html>
