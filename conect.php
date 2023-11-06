<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}

// Puedes realizar consultas y otras operaciones con la base de datos utilizando $conn
// Cuando hayas terminado, no olvides cerrar la conexión
$conn->close();
?>
