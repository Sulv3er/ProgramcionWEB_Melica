<?php
include_once ('model.php');
    // Clase para manejar acciones de la base de datos relacionadas con los ejemplos
    class ModelEjemplos{
        private $con;

        public function __construct(){
            $model = new Model();
            $this->con = $model->con;
        }

        // Método para guardar un comentario
        public function guardarEjemplo($REQ){
            $sql = "INSERT INTO ejemplos(titulo,descripcion,codigo) VALUES ('".$REQ['titulo']. "','".$REQ['descripcion']."','" . $REQ['codigo'] . "')";
                try{
                    $this->con->query($sql);
                }catch(Exception $e){
                    echo "Error al guardar el comentario: " . $e->getMessage();
                }
        }
    }
?>