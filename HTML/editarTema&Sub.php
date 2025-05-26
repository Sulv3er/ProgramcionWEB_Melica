<?php
// Supón que ya tienes la conexión a la base de datos
include_once("conexion.php");

// Obtener datos por GET
$id_tema = $_GET['id'] ?? null;

// Consultar datos del tema
$sql_tema = $conn->prepare("SELECT * FROM temas WHERE id = ?");
$sql_tema->execute([$id_tema]);
$tema = $sql_tema->fetch(PDO::FETCH_ASSOC);

// Consultar subtemas relacionados
$sql_subtemas = $conn->prepare("SELECT * FROM subtemas WHERE id_tema = ?");
$sql_subtemas->execute([$id_tema]);
$subtemas = $sql_subtemas->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tema y Subtemas</title>
    <link rel="stylesheet" href="../CSS/Temas&Sub.css">
</head>
<body>
    <h2>Editar Tema</h2>
    <form action="modelTemaSubtema.php" method="POST">
        <!-- ID oculto del tema -->
        <input type="hidden" name="id_tema" value="<?php echo $tema['id']; ?>">

        <label for="nombre">Nombre del Tema:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $tema['nombre']; ?>" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required><?php echo $tema['descripcion']; ?></textarea>

        <h3>Subtemas</h3>

        <?php foreach ($subtemas as $index => $subtema): ?>
            <fieldset style="margin-bottom: 15px;">
                <legend>Subtema <?php echo $index + 1; ?></legend>
                <input type="hidden" name="subtemas[<?php echo $index; ?>][id]" value="<?php echo $subtema['id']; ?>">

                <label for="titulo_<?php echo $index; ?>">Título:</label>
                <input type="text" id="titulo_<?php echo $index; ?>" name="subtemas[<?php echo $index; ?>][titulo]" value="<?php echo $subtema['titulo']; ?>" required>

                <label for="contenido_<?php echo $index; ?>">Contenido:</label>
                <textarea id="contenido_<?php echo $index; ?>" name="subtemas[<?php echo $index; ?>][contenido]" required><?php echo $subtema['contenido']; ?></textarea>
            </fieldset>
        <?php endforeach; ?>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
