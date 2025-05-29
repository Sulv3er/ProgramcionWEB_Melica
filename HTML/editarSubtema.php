<?php 
include_once ('header_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar subtema - CodeSprout</title>

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/CRUD_Ejemplos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <main>
        <!-- Contenedor principal -->
        <div> 
            <!-- Formulario para modificar un subtema -->
            <h1>Editar Subtema</h1>
            <hr><br>
            <?php
                isset($registro);
            ?>
            <form action="../Controller/controllerHome.php" method="post">
                <input type="hidden" name="opcion" value="MODIFICAR_SUBTEMA">
                <input type="hidden" name="id_subtema" value="<?php echo $registro['id_subtema']; ?>">

                <div class="form-group">
                    <label for="id_tema">Tema principal</label>
                    <select name="id_tema" id="id_tema" required>
                        <option value="">-- Selecciona un tema --</option>
                        <?php
                            foreach ($temas as $tema) {
                                $selected = ($tema['id_tema'] == $registro['id_tema']) ? 'selected' : '';
                                echo "<option value='{$tema['id_tema']}' $selected>{$tema['titulo']}</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" value="<?php echo $registro['titulo']; ?>" required>
                </div>

                <div class="form-group">
                    <label for="contenido">Descripción</label>
                    <textarea id="contenido" name="contenido" rows="2" required><?php echo $registro['contenido']; ?></textarea>
                </div>

                <button type="submit" class="btn-Guardar">Guardar</button>
            </form>
        </div>
        <br><br>
    </main>

    <!-- Pie de página con información de contacto -->
    <footer>
        <div class="footer-content">
            <p>Contacto: info@codesprout.com | Tel: 123-456-7890</p>
            <p>Dirección: Calle Falsa 123, Ciudad</p>
            <p>&copy; 2023 CodeSprout. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>