<?php

include "conexion.php";
// Revisar la conexi�n y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexi�n ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$empleado=$_POST['empleado'];
$fecha=$_POST['fecha'];
$total=$_POST['total'];
$producto=$_POST['producto'];



//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO compras VALUES('0', '$empleado','$fecha','$total','$producto')";

//Si la consulta funciona correctamente enviar� una alerta de confirmaci�n
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='venta.php';</script>";
//Si la consulta falla mandar� un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexi�n a la bd
$conn->close();
?>