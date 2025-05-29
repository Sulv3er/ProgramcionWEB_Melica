<?php
include_once ('header_admin.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tema - CodeSprout</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/Temas&Sub.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <h1>Editar Tema</h1>
    <form action="../Controller/controllerHome.php" method="POST">
        <input type="hidden" name="opcion" value="MODIFICAR_TEMA">
        <!-- ID oculto del tema -->
        <input type="hidden" name="id_tema" value="<?php echo $registro['id_tema']; ?>">

        <label for="titulo">Nombre del Tema:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $registro['titulo']; ?>" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required><?php echo $registro['descripcion']; ?></textarea>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
