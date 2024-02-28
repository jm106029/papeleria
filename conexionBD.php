<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "papeleriadb";

try {
    // Crear conexión
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // Establecer el modo de error PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";

    // Puedes realizar consultas y otras operaciones aquí

    // Cerrar la conexión al finalizar
    $conn = null;
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
