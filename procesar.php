<?php

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the POST data
    $nombre = $_POST['nombre'];
    $nota = $_POST['nota'];
    

    // Display the data in HTML
    echo "<h2>Submitted Data</h2>";
    echo "<p>Name: " . htmlspecialchars($nombre) . "</p>";
    echo "<p>Nota: " . htmlspecialchars($nota) . "</p>";
    
} else {
    // Handle non-POST requests, e.g., display an error message
    echo "Invalid request method.";
}

// Establish the database connection at the beginning of your script
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academia";
$conn = new mysqli($servername, $username, $password, $dbname);

$stmt = $conn->prepare("INSERT INTO test1 (nombre, nota) VALUES (?, ?)");

$stmt->bind_param("si", $nombre, $nota);

if ($stmt->execute()) {
    echo "Nuevo usuario registrado correctamente.";
} else {
    echo "Error al registrar el usuario: " . $stmt->error;
}

$stmt->close();
$conn->close();


?>