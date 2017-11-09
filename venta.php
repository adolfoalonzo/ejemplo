<!DOCTYPE html>

 <html lang="es">
    <head><title>Venta</title>
	    <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	</head>
	 <body background="imagenes/can.jpg">
	  
	    <form id="usuario" name="usuario" method="post" action="guardarventa.php">
		<fieldset>
	      <legend>Venta</legend>
		 Empleado:<br>
<select name="id_empleado">
   
     <?php
           include "conexion.php";
		   $consulta="select * from empleados";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['id_empleado']?>">  <?php echo $lista['nombre']?> </option> 
    <?php } ?>
</select> 
		 Fecha:<br>
         <input type="date" name="fecha" placeholder="Fecha de la compra" required>
		 <br>
		 

		Producto:<br>
<select name="id_producto">
   
     <?php
           include "conexion.php";
		   $consulta="select * from productos";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['id_producto']?>">  <?php echo $lista['nombre']?> </option> 
    <?php } ?>
</select> 


Precio:<br>
<select name="id_producto">
   
     <?php
           include "conexion.php";
		   $consulta="select * from productos";
                 $resultado=mysqli_query($conn,$consulta);
                    while($lista=mysqli_fetch_array($resultado)){
 	    ?> 
 <option value="<?php echo $lista['precio']?>">  <?php echo $lista['precio']?> </option> 
    <?php } ?>
</select> 
		
		
		 <br>
		
		 <button type="submit">Guardar</button>
			<button type="submit">Imprimir</button>
		 <a href="inicio.php">Regresar</a>
		 
		    </fieldset>
		</form>
		
		
	 
	 </body>
<html>