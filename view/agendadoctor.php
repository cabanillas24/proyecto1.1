<?php
if (!isset($_COOKIE['sesion'])){
  header("location: login.php");
}
?>
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
    width: 7%;
    height: 36px ;
    width: 130px;
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
  padding: 5em;
  margin: 10em 0 15em 20em;
  width: 800px;
  position: relative;
  text-align: center;
  margin-left: 600px !important; 
}
table{

  font-family: gothic;
  border-collapse: collapse;
  width: 100%;

  
}




td, th {
  border: 5px solid #DCDCDC;
  text-align: left;
  padding: 8px;
}
.bottonh{		/*CLASE PARA LOS BOTONES DE LA BARRA DE NAVEGACION*/
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
                    <img src="../imagenes/cc.png" class="logo">
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
<div class ="divtable center">
<table class ="center" style="width:100%  " class="table table-striped"> 
	
   <h3 FONT SIZE=5> <strong> Today's inquiries </strong></FONT>
    
    </caption>
  
     
    <thead>
     <tr>
           
            <td class="table-active"><h5>IdPatient</h5></td>
            <td class="table-active"><h5>Date</h5></td>
            <td class="table-active"><h5>Time</h5></td>
            
        </tr>

        
          <?php
          $datos=$_COOKIE["sesion"];
          $datos=json_decode($datos);

          $ID=$datos[0]->Id_Medico;
         
            $sql="SELECT pacientes.Id_Paciente, citas.Fecha, citas.Hora FROM pacientes LEFT JOIN citas ON pacientes.Id_Paciente=citas.Id_paciente WHERE citas.Id_Medico=$ID AND Fecha>=CURDATE() ORDER BY Fecha;";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
              ?>
              <tr>
                
                <td class="table-success"><?php echo $mostrar['Id_Paciente']?></td>
                <td class="table-success"><?php echo $mostrar['Fecha']?></td>
                <td class="table-success"><?php echo $mostrar['Hora']?></td>
                
              </tr>
              <?php
            }
            ?>
</table>
<div class="botonera">
   <a href="perfilmedico.php"><input type="button" value="Back"></a>

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container center">
                                          
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Type of report
    </button>
    <div class="dropdown-menu">
      <a  type="button" class="botonera"  onclick="location.href='tabla.php'">Top of patients</a>
      <a type="button" class="botonera"  onclick="location.href='mujeres.php'" >women filter</a>
      <a type="button" class="botonera"  onclick="location.href='Hombres.php'">Men filter</a>
    </div>
  </div>
</div>
    
    
</div>




</div>

</body>
<div class="jumbotron text-center final" style="margin-bottom:0"><!--BARRA INFERIOR-->
        <img src="../imagenes/cc.png" class="logo">
        <p style="-webkit-text-fill-color: white;font-size: 12px;">Copyright © 2021 Axolotl Developers. Derechos asociados y reservados por la clínica Chacón S.A de C.V.</p>
    </div>
</html>
