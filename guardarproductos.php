<?php

include "conexion.php";
// Revisar la conexi�n y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexi�n ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];



//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO productos VALUES('0', '$nombre','$precio')";

//Si la consulta funciona correctamente enviar� una alerta de confirmaci�n
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='productos.php';</script>";
//Si la consulta falla mandar� un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexi�n a la bd
$conn->close();
?>