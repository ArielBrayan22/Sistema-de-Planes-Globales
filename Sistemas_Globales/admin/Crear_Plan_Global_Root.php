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
	<?php?>
     
     
          <form method="post" action="">
         
          <hr>
            <table id="tabla_Plan_Global">
          	
          	<tr><td colspan="3"><h3>I. Crear Plan Global</h3></td></tr>
          	<tr><td> &bull; Nombre de la materia :</td><td colspan="2"><input type="text" size="70"></td></tr>
          	<tr><td> &bull; Facultad</td><td colspan="2">
              <select>
                <option></option>
                <option>Tecnologia</option>
                <option>Medicina</option>
                <option>Odontoligia</option>
                <option>Economia</option>
                <option>Humanidades</option>
                <option>Derecho</option>
              </select>

            </td></tr>
          	<tr><td> &bull; Carrera </td><td colspan="2">
                 <select>
                  <option></option>
                 <option>LIC. ING. DE SISTEMAS</option>
                 <option>LIC. EN FISICA</option>
                 <option>LIC. QUIMICA</option>
                 <option>LIC. ING. QUIMICA</option>

                 </select>
                </td></tr>

            <tr><td> &bull; Asignar el Docente</td><td colspan="2">
                 <select>
                  <option></option>
                 <option>Lic.Flores Marcelo</option>
                 <option>Lic. Jaldin Rolando</option>
                 <option>Lic. Indira Camacho</option>
                 <option>Lic. Blanco Leticia</option>

                 </select>
                </td></tr>
            <tr><td> &bull; Codigo :</td><td colspan="2"><input type="text" size="70"></td></tr>
          	<tr><td><input type="submit" value="Insertar"></td></tr>


          </table>
          <br>
          
          
	</form>

	
    
    
</div>


	

</body>


</footer>
</html>

