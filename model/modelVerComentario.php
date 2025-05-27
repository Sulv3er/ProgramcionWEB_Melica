<?php
require_once 'model.php'; // Asegúrate de que la ruta sea correcta

class ComentariosModel extends Model {
    public function __construct() {
        parent::__construct(); // Llama al constructor del padre para establecer la conexión
    }

    // Obtener todos los comentarios
    public function getComentarios() {
        $query = $this->con->prepare('SELECT * FROM Comentarios ORDER BY fecha_comentario DESC');
        $query->execute();
        $result = $query->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Eliminar un comentario
    public function eliminarComentario($id) {
        $query = $this->con->prepare('DELETE FROM Comentarios WHERE id = ?');
        $query->bind_param('i', $id);
        return $query->execute();
    }

    // Obtener un comentario por ID para editar
    public function getComentarioPorId($id) {
        $query = $this->con->prepare('SELECT * FROM Comentarios WHERE id = ?');
        $query->bind_param('i', $id);
        $query->execute();
        $result = $query->get_result();
        return $result->fetch_assoc();
    }

    // Actualizar un comentario
    public function actualizarComentario($id, $correo, $titulo, $comentario) {
        $query = $this->con->prepare('UPDATE Comentarios SET correo = ?, titulo = ?, comentario = ? WHERE id = ?');
        $query->bind_param('sssi', $correo, $titulo, $comentario, $id);
        return $query->execute();
    }
}
?>