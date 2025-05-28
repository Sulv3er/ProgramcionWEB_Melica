<?php
include_once('model.php');

// Clase para manejar acciones de la base de datos relacionadas con el registro de usuarios
class ModelUsuario{
    private $con;

    public function __construct() {
        $model = new Model();
        $this->con = $model->con;
    }

    // ------------------------------------- REGISTRO -------------------------------------
    // Método para registrar un nuevo usuario
    public function registrarUsuario($REQ) {
        $sql = "INSERT INTO usuarios(nombre,email,contraseña) VALUES ('".$REQ['nombre']. "','".$REQ['email']."','" . $REQ['contraseña'] . "')";
        try{
            $this->con->query($sql);
        }catch(Exception $e){
            echo "Error al guardar el comentario: " . $e->getMessage();
        }
    }

    // ----------------------------- LOGIN / INICIO DE SESIÓN ------------------------------
    // Método para verificar las credenciales del usuario
    public function verificarUsuario($email, $contraseña) {
        $sql = "SELECT * FROM usuarios WHERE email = '".$email."' LIMIT 1";
        $result = $this->con->query($sql);

        if($result && $result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if($user['contraseña'] === $contraseña) {
                return $user; // Usuario válido
            }
        }
        return false; // No válido
    }


    // --------------------------------- OBTENER DATOS DE USUARIO ---------------------------------
    //Método para obtener los datos de un ejemplo especifico
        function consultarUsuario($id){
            $sql = "SELECT * FROM usuarios WHERE id_usuario=".$id;
            try{
                $resultado = $this->con->query($sql);
                if ($resultado && $resultado->num_rows > 0) {
                    $registro = $resultado->fetch_assoc();
                    return $registro;
                } else {
                    return null;
                }
            }catch(Exception $e){
                echo "Error al obtener los datos del usuario";
                return null;
            }
        }
}
?>
