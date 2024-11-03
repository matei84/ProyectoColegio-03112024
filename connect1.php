<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academia";

// Crear conexión
$conn1 = new mysqli($servername, $username, $password, $dbname);


// Verificar conexión
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);  
  
  } else {
      echo "Connected successfully";
  }
  

// Crear la tabla "usuarios"
$sql1 = "CREATE TABLE test1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    nota INT(2)
  )";

if ($conn1->query($sql1) === TRUE) {
    echo "Tabla test1 creada correctamente";
  } else {
    echo "Error al crear la tabla: " . $conn1->error;
  }

$conn1->close();
?>