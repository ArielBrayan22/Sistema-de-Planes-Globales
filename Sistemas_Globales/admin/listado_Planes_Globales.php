<html>
<head>
	<title>Sistema de Planes Globales</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<center><h2>Sistema de Planes Globales</h2></center>
	<hr></hr>
	
	<div id="menu">
    <div id="titulo">Inicio</div>
    <div id="titulo">
    <a id="titulo" href="Crear_Docente.php">Crear Docente</a>
    <a id="titulo"href="Crear_Plan_Global_Root.php">Crear Nuevo Plan Global</a>
    <a id="titulo" href="listado_Planes_Globales.php">Lista de Planes Globales</a>
    </div>
    <div id="titulo">Plan Analitico</div>
    <div id="titulo">Busqueda</div>
    <div id="titulo">Manual de Usuario</div>

	</div>

<div id="cuerpo">
 
     
          <center><h3>Busqueda de Planes Globales y Docentes</h3></center>  
          <hr>

          <form  action="" method="post"> 
         
            <input type="submit" size="50" name="Btn_Buscar_Plan_Global" value="Buscar Plan Global">
            <input type="submit" size="50" name="Btn_Buscar_Docente" value="Buscar Docente">
          </form>
         

    <?php      
  
    if(isset($_POST['Btn_Buscar_Docente']))
    {
      
       echo '<table id="tabla_Plan_Global">         
            <tr><td> &bull; Docente</td><td><input type="text" size="70"></td>
            <td><center><input type="submit" value="Buscar"></center></td>
            <td><center><input type="submit" value="Mostrar Todos"></center></td></tr>
            </table>
            <br>';         
    }


    if(isset($_POST['Btn_Buscar_Plan_Global']))
    {
         echo ' <table id="tabla_Plan_Global">         
            <tr><td> &bull; Plan Gobal</td><td><input type="text" size="70"></td>
            <td><center><input type="submit" value="Buscar"></center></td>
            <td><center><input type="submit" value="Mostrar Todos"></center></td></tr>
            </table>
            <br> ';
    }

           
          
          ?>


</div>


	

</body>


</footer>
</html>

<?php


 ?>