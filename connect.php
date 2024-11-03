<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "academia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);  

} else {
    echo "Connected successfully";
}


// Crear la tabla "usuarios"
$sql = "CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  identificacion VARCHAR(5),
  nota INT(2),
  cualificacionFinal BOOLEAN
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla usuarios creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

$conn->close();

?>