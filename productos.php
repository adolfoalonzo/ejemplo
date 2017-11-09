<!DOCTYPE html>

 <html lang="es">
    <head><title>Productos</title>
	    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	</head>
	 <body background="imagenes/ff.jpg">
	  
	    <form id="usuario" name="usuario" method="post" action="guardarproductos.php">
		<fieldset>
	      <legend>Agregar Producto</legend>
		 Nombre:<br>
         <input type="text" name="nombre" placeholder="Nombre del producto" required>
		 <br>
		Precio:<br>
         <input type="number" name="precio" placeholder="Precio" required>
		 <br>
		 <br>


		
		 <button type="submit">Guardar</button>
		 <a href="inicio.php">Regresar</a>
		 
		    </fieldset>
		</form>
		
		
	 
	 </body>
<html>