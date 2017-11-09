<!DOCTYPE html>

 <html lang="es">
    <head><title>Empleado</title>
	    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	</head>
	 <body background="imagenes/em.jpg">
	  
	    <form id="usuario" name="usuario" method="post" action="guardarempleado.php">
		<fieldset>
	      <legend>Agregar Empleado</legend>
		 Nombre:<br>
         <input type="text" name="nombre" placeholder="Nombre del empleado" required>
		 <br>
		Apellidos:<br>
         <input type="text" name="apellidos" placeholder="Apellidos del empleado" required>
		 <br>
		 
		 Direccion:<br>
         <input type="text" name="dir" placeholder="Direccion" required>
		 <br>

		 Telefono:<br>
         <input type="number" name="tel" placeholder="Telefono" required>
		 <br>
		
		 <button type="submit">Guardar</button>
		 <a href="inicio.php">Regresar</a>
		 
		    </fieldset>
		</form>
		
		
	 
	 </body>
<html>