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

        //Método para consultar todos los ejemplos guardados en la base de datos
        function consultarEjemplos(){
            $sql = "SELECT * FROM ejemplos";
            try{
                $registros=$this->con->query($sql);
                return $registros;
            }catch(Exception $e){
                echo "Error al consultar";
            }
        }

        //Método para obtener los datos de un ejemplo especifico
        function consultarEjemplo($id){
            $sql = "SELECT * FROM ejemplos WHERE id_ejemplo=".$id;
            try{
                $resultado = $this->con->query($sql);
                if ($resultado && $resultado->num_rows > 0) {
                    $registro = $resultado->fetch_assoc();
                    return $registro;
                } else {
                    return null;
                }
            }catch(Exception $e){
                echo "Error al obtener el ejemplo";
                return null;
            }
        }

        //Método para actualizar los datos del ejemplo
        function editarEjemplo($REQ){
            $sql = "UPDATE ejemplos set titulo='".$REQ['titulo']."', descripcion='".$REQ['descripcion']."', codigo='".$REQ['codigo']."'where id_ejemplo=".$REQ['id_ejemplo'];
            try{
                $this->con->query($sql);
            }catch(Exception $e){
                echo "Error al editar el ejemplo".$e;
            }
        }

        function eliminarEjemplo($id){
            //echo "".$id;
            $sql = "DELETE FROM ejemplos WHERE id_ejemplo=".$id;
            try{
                $this->con->query($sql);
                return true;
            } catch(Exception $e){
                echo 'Error al eliminar el ejemplo';
                return false;
            }
        }
    }
?>