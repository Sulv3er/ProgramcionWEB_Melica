<?php
$host = "localhost"; // Servidor de la base de datos
$dbname = "pruebaPablo"; // Nombre base de datos
$username = "root"; // Usuario de la base de datos
$password = ""; // Contraseña del usuario

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa"; 
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>