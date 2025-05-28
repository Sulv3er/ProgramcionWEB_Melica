<?php
include_once('model.php');

// Clase para manejar acciones de la base de datos relacionadas con el registro de usuarios
class ModelUsuario{
    private $con;

    public function __construct() {
        $model = new Model();
        $this->con = $model->con;
    }

    // Método para registrar un nuevo usuario
    public function registrarUsuario($REQ) {
        $sql = "INSERT INTO usuarios(nombre,email,contraseña) VALUES ('".$REQ['nombre']. "','".$REQ['email']."','" . $REQ['contraseña'] . "')";
        try{
            $this->con->query($sql);
        }catch(Exception $e){
            echo "Error al guardar el comentario: " . $e->getMessage();
        }
    }
}
?>
