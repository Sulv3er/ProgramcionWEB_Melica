<?php 
include_once ('header_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar ejemplo - CodeSprout</title>

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/CRUD_Ejemplos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <main>
        <!-- Contenedor principal -->
        <div> 
            <!-- Formulario para modificar un ejemplo -->
            <h1>Editar Ejemplo</h1>
            <hr><br>
            <?php
                isset($registro);
            ?>
            <form action="../Controller/controllerHome.php" method="post">
                <input type="hidden" name="opcion" value='MODIFICAR_EJEMPLO'>

                <div class="form-group">
                    <label for="id_ejemplo">ID</label>
                    <input type="text" id="id_ejemplo" name="id_ejemplo" value="<?php echo $registro['id_ejemplo']; ?>" readonly>
                </div>
                
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" value="<?php echo $registro['titulo']; ?>" >
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" rows="2"><?php echo $registro['descripcion']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="codigo">Código</label>
                    <textarea id="codigo" name="codigo" rows="4"><?php echo $registro['codigo']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="fecha_ejemplo">Fecha</label>
                    <input type="text" id="fecha_ejemplo" name="fecha_ejemplo" value="<?php echo $registro['fecha_ejemplo']; ?>" readonly>
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