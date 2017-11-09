<?php

include "conexion.php";
// Revisar la conexión y envia un mensaje si no se puede conectar
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
} 

//Recibir los datos desde el formulario por medio del metodo POST
//Guarda estos datos en variables.
$empleado=$_POST['empleado'];
$fecha=$_POST['fecha'];
$total=$_POST['total'];
$producto=$_POST['producto'];



//Se realiza la consulta para insertar los datos.
$sql = "INSERT INTO compras VALUES('0', '$empleado','$fecha','$total','$producto')";

//Si la consulta funciona correctamente enviará una alerta de confirmación
if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\">alert('registro exitoso');location.href='venta.php';</script>";
//Si la consulta falla mandará un mensaje de error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Se cierra la conexión a la bd
$conn->close();
?>