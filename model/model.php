<?php
// Configuración de la base de datos para localhost
define('DB_SERVER', 'localhost'); // o '127.0.0.1'
define('DB_USERNAME', 'root');    // Usuario común en entornos locales
define('DB_PASSWORD', '');        // Contraseña vacía por defecto en muchos XAMPP/WAMP
define('DB_NAME', 'pruebaPablo'); // Nombre de tu base de datos local

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