<?php


// Conexión con base de datos local de XAMPP
$conexion = new mysqli("localhost", "root", "", "restaurantes");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Capturo los datos del formulario
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$personas = $_POST['personas'];
$clave = $_POST['clave'];

$claveHash = password_hash($clave, PASSWORD_DEFAULT);

$sql = "INSERT INTO reservaciones (nombre_cliente, fecha, num_personas, clave)
        VALUES (?, ?, ?, ?)";


$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssis", $nombre, $fecha, $personas, $claveHash);

if ($stmt->execute()) {
    echo "<h2>Gracias por reservar con nosotros, $nombre. ¡Te esperamos!</h2>";
} else {
    echo "Error al guardar la reservación: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
