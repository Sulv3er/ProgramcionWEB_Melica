<?php
// Configuración de la base de datos
define('DB_SERVER', 'srv573.hstgr.io'); // o '156.67.76.8'
define('DB_USERNAME', 'Pablo');    // Reemplaza con tu usuario
define('DB_PASSWORD', '+2nUQKA9y$3'); // Reemplaza con tu contraseña
define('DB_NAME', 'u241854858_pruebaPablo'); // Reemplaza con el nombre de tu BD

// Intentar conexión
try {
    $pdo = new PDO(
        "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME,
        DB_USERNAME, 
        DB_PASSWORD
    );
    // Configurar el modo de error PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Configurar charset a utf8
    $pdo->exec("SET NAMES 'utf8'");
    
} catch(PDOException $e) {
    die("ERROR: No se pudo conectar. " . $e->getMessage());
}
?>