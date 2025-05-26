<?php
include_once("conexion.php");

// Actualizar tema
$id_tema = $_POST['id_tema'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

$sql_update_tema = $conn->prepare("UPDATE temas SET nombre = ?, descripcion = ? WHERE id = ?");
$sql_update_tema->execute([$nombre, $descripcion, $id_tema]);

// Actualizar subtemas
foreach ($_POST['subtemas'] as $subtema) {
    $id = $subtema['id'];
    $titulo = $subtema['titulo'];
    $contenido = $subtema['contenido'];

    $sql_update_subtema = $conn->prepare("UPDATE subtemas SET titulo = ?, contenido = ? WHERE id = ?");
    $sql_update_subtema->execute([$titulo, $contenido, $id]);
}

header("Location: crud_temas.php?edit=success");
exit;
