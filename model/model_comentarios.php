<?php
include_once ('model.php');
    // Clase para manejar acciones de la base de datos relacionadas con los comentarios
    class ModelComentarios{
        private $con;

        public function __construct(){
            $model = new Model();
            $this->con = $model->con;
        }

        // Método para guardar un comentario
        public function guardarComentario($REQ){
            $sql = "INSERT INTO comentarios(email,titulo_comentario,comentario) VALUES ('".$REQ['email']. "','".$REQ['titulo_comentario']."','" . $REQ['comentario'] . "')";
                try{
                    $this->con->query($sql);
                }catch(Exception $e){
                    echo "Error al guardar el comentario: " . $e->getMessage();
                }
        }
    }
?>