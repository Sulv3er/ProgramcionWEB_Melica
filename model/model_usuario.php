<?php
include_once('model.php');

// Clase para manejar acciones de la base de datos relacionadas con el registro de usuarios
class ModelRegistro {
    private $con;

    public function __construct() {
        $model = new Model();
        $this->con = $model->con;
    }

    // Método para registrar un nuevo usuario
    public function registrarUsuario($REQ) {
        // Obtener la fecha actual
        $fecha = date('Y-m-d H:i:s'); // Formato: YYYY-MM-DD HH:MM:SS

        // Preparar la consulta SQL
        $sql = "INSERT INTO registro (nombre, contraseña, correo, fecha) VALUES (?, ?, ?, ?)";
        
        try {
            // Preparar la declaración
            $stmt = $this->con->prepare($sql);
            // Vincular parámetros
            $stmt->bind_param("ssss", $REQ['nombre'], $REQ['contraseña'], $REQ['correo'], $fecha);
            // Ejecutar la declaración
            $stmt->execute();
            echo "Usuario registrado exitosamente.";
        } catch (Exception $e) {
            echo "Error al registrar el usuario: " . $e->getMessage();
        }
    }
}
?>
