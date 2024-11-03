<?php

// Validar los datos (opcional, pero recomendado)
if (empty($nombre) || empty($identificacion)) {
    echo "Por favor, completa todos los campos.";
    exit;
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$nota = $_POST['nota'];
$cualificacion = $_POST['cualificacion'];


// Establish the database connection at the beginning of your script
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academia";
$conn = new mysqli($servername, $username, $password, $dbname);


// Preparar la sentencia
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, identificacion, nota, cualificacion) VALUES (?, ?, ?, ?)");

// Vincular parámetros
$stmt->bind_param("ssib", $nombre, $identificacion, $nota, $cualificacion);

// Ejecutar la sentencia
if ($stmt->execute()) {
    echo "Nuevo usuario registrado correctamente.";
} else {
    echo "Error al registrar el usuario: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>