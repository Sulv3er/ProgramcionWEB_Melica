<?php
include_once('model.php');

// Clase para manejar acciones de la base de datos relacionadas con el CRUD de temas y CRUD subtemas
class ModelTemaSubtema {
    private $con;

    public function __construct() {
        $model = new Model();
        $this->con = $model->con;
    }

    // Método para registrar un nuevo tema
    public function guardarTema($REQ){
        $sql = "INSERT INTO temas(titulo,descripcion) VALUES ('".$REQ['titulo']. "','".$REQ['descripcion']. "')";
        try{
            $this->con->query($sql);
        }catch(Exception $e){
            echo "Error al guardar el tema: " . $e->getMessage();
        }
    }
    
    //Método para consultar todos los temas guardados en la base de datos
    function consultarTemas(){
        $sql = "SELECT * FROM temas";
        try{
            $registros=$this->con->query($sql);
            return $registros;
        }catch(Exception $e){
            echo "Error al consultar los temas: " . $e->getMessage();
        }
    }

    //Método para obtener los datos de un tema especifico
    function consultarTema($id){
        $sql = "SELECT * FROM temas WHERE id_tema=".$id;
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

    //Método para actualizar los datos de un tema
    function editarTema($REQ){
        $sql = "UPDATE temas SET titulo = '".$REQ['titulo']."', descripcion = '".$REQ['descripcion']."' WHERE id_tema = ".$REQ['id_tema'];
        try{
            $this->con->query($sql);
        }catch(Exception $e){
            echo "Error al editar el tema: " . $e->getMessage();
        }
    }

    // Método para eliminar un tema
    function eliminarTema($id){
        $sql = "DELETE FROM temas WHERE id_tema=".$id;
        try{
            $this->con->query($sql);
            return true;
        } catch(Exception $e){
            echo 'Error al eliminar el tema';
            return false;
        }
    }

    // SUBTEMAS

    //Método para guardar un nuevo subtema
    public function guardarSubtema($REQ){
        $sql = "INSERT INTO subtemas(id_tema, titulo, contenido) VALUES (
            '".$REQ['id_tema']."',
            '".$REQ['titulo']."',
            '".$REQ['contenido']."'
        )";
        try {
            $this->con->query($sql);
        } catch(Exception $e){
            echo "Error al guardar el subtema: " . $e->getMessage();
        }
    }
    
    // Método para consultar todos los subtemas guardados en la base de datos
    function consultarSubtemas(){
        $sql = "SELECT * FROM subtemas ORDER BY id_subtema DESC";
        try{
            $registros=$this->con->query($sql);
            return $registros;
        }catch(Exception $e){
            echo "Error al obtener los subtemas: " . $e->getMessage();
        }
    }

    //Método para obtener los datos de un subtema especifico
    function consultarSubtema($id){
        $sql = "SELECT * FROM subtemas WHERE id_subtema=".$id;
        try{
            $resultado = $this->con->query($sql);
            if ($resultado && $resultado->num_rows > 0) {
                $registro = $resultado->fetch_assoc();
                return $registro;
            } else {
                return null;
            }
        }catch(Exception $e){
            echo "Error al obtener el subtema";
            return null;
        }
    }

     //Método para actualizar los datos de un subtema
    function editarSubtema($REQ){
        $sql = "UPDATE subtemas SET id_tema = '".$REQ['id_tema']."', titulo = '".$REQ['titulo']."', contenido = '".$REQ['contenido']."' WHERE id_subtema = ".$REQ['id_subtema'];
        try {
            $this->con->query($sql);
        } catch(Exception $e) {
            echo "Error al editar el subtema: " . $e->getMessage();
        }
    }

    function eliminarSubtema($id){
        $sql = "DELETE FROM subtemas WHERE id_subtema=".$id;
        try{
            $this->con->query($sql);
            return true;
        } catch(Exception $e){
            echo 'Error al eliminar el subtema';
            return false;
        }
    }

}
?>
