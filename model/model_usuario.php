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
            $sql = "SELECT * FROM usuarios WHERE email = ? LIMIT 1";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();

            $result = $stmt->get_result();
            if ($result && $result->num_rows == 1) {
                $user = $result->fetch_assoc();

                if ($user['contraseña'] === $contraseña) {
                    $user['es_admin'] = strtolower($user['nombre']) === strtolower('Administrador CodeSprout');
                    return $user;
                }
            }
            return false;
        }

        //Método para obtener los datos de un usuario especifico
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

        //Método para actualizar los datos de un usuario
        function editarUsuario($REQ){
            $sql = "UPDATE usuarios set nombre='".$REQ['nombre']."', email='".$REQ['email']."', contraseña='".$REQ['contraseña']."'where id_usuario=".$REQ['id_usuario'];
            try{
                $this->con->query($sql);
            }catch(Exception $e){
                echo "Error al editar el usuario".$e;
            }
        }
}
?>
