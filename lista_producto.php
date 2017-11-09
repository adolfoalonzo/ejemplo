<!DOCTYPE html>
 <html lang="es">
    <head>
	 <link rel="stylesheet" href="css/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<meta charset="iso-8859-1">
	<title>Canciones</title>
	</head>
	 <body background="imagenes/lf.jpg">
       <form method="get" name="form2" id="form2">
       
          Introduzca el nombre del producto a buscar
     
            <input name="titulo" type="text" id="titulo" size="" autocomplete="off" />
			
            <button type="submit" name="consultar" id="consultar">Consultar</button><br><br>
            <a href="lista_cancion.php">Nueva Busqueda /</a> <a href="mostrar_articulo.php"> Mostrar todos /</a> <a href="productos.php">Agregar Articulo</a>
          
		  <a href="inicio.php">Regresar</a>
       
    </form>
	
	<br>
<?php 
	if(isset($_GET['consultar']))
	{
		if($_GET['titulo'] == ""){
		//echo "Debe Introducir el N&uacute;mero de Control para Realizar la B&uacute;squeda";
		?>
<script type="text/javascript">
			alert("Debe introducir  nombre de la cancion para realizar la búsqueda");	
		</script>
<?php
		} else
		{
		
		include('conexion.php');
	
       
		$titulo = $_GET['titulo'];
		
		$sql="Select * from cancion where titulo like '%$titulo%'";
		 
		$consulta=mysqli_query($conn,$sql);
		$nf=mysqli_num_rows($consulta);
		if($nf!=0)		
		{?>
<table border="1">
  <tr >
    <th>Id</th>
    <th>Titulo</th>
    <th>Numero de pista</th>
	<th>Duracion</th>
	<th>Id Album</th>
    <th>Eliminar</th>
	<th>Imprimir</th>
  </tr>
  <?php 	for ($i=0;$i<$nf;$i++)
        {
            $cancion=mysqli_fetch_array($consulta);
            ?>
  <tr> 
	<td><?php echo $cancion['id_cancion'];?></td>	
	<td><?php echo $cancion['titulo'];?></td>	
    <td><?php echo $cancion['num_pista'];?></td>
	<td><?php echo $cancion['duracion'];?></td>
	<td><?php echo $cancion['id_album'];?></td>
    
	

	
	
 <td><a href="eliminar_cancion.php?id_cancion=<?php echo $cancion['id_cancion']?>">Eliminar</a></td>
 <td><a href="reporte_cancion.php?id_cancion=<?php echo $cancion['id_cancion']?>">Imprimir</a></td>
  </tr>
  <?php 		
         } // for de consulta general
        mysqli_close($conn)?>
</table>
<p>
  <?php }// if de nf	
		else{
			//echo "No Existe en la Base de Datos";?>
  <script type="text/javascript">
			alert("No existe en la base de datos");
  </script>
  
  <?php 
			}
      	 }// else
	}// si existe consultar 
	?>
  </tr>
  </table>
   </body>
<html>