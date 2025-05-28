<?php 
include_once ('header_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Subtemas - CodeSprout</title>

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/CRUD_Ejemplos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <main>
        <!-- Contenedor principal -->
        <div> 
            <!-- Formulario para agregar un nuevo subtema -->
            <h1>Nuevo Subtema</h1>
            <hr><br>
            <form action="../Controller/controllerHome.php" method="post">
                <input type="hidden" name="opcion" value='GUARDAR_SUBTEMA'>

                <div class="form-group">
                    <label for="id_tema">Tema principal</label>
                    <select name="id_tema" id="id_tema" required>
                        <option value="">-- Selecciona un tema --</option>
                        <?php
                            foreach ($temas as $tema) {
                                echo "<option value='{$tema['id_tema']}'>{$tema['titulo']}</option>";
                            }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" required>
                </div>

                <div class="form-group">
                    <label for="contenido">Descripción</label>
                    <textarea id="contenido" name="contenido" rows="2" required></textarea>
                </div>

                <button type="submit" class="btn-Guardar">Guardar</button>
            </form>
        </div>

        <br><br>

        <!-- Tabla de registros - Subtemas -->
        <div> 
            <h1>Lista de subtemas</h1>
            <hr><br>
            <table name="tablaSubtemas" id="tablaSubtemas" class="table table-striped m-4">
                    <thead >
                        <tr>
                            <th>ID Subtema</th>
                            <th>ID Tema</th>
                            <th>Título</th>
                            <th>Contenido</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php while($reg = $registros->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $reg['id_subtema']?></td>
                                <td><?php echo $reg['id_tema']?></td>
                                <td><?php echo $reg['titulo']?></td>
                                <td><?php echo $reg['contenido']?></td>
                                <td><a class="btn btn-success" href="../Controller/controllerHome.php?opcion=EDITAR_SUBTEMA&id=<?php echo $reg['id_subtema'];?>">Editar</a></td>
                                <td><a class="btn btn-danger" href="../Controller/controllerHome.php?opcion=ELIMINAR_SUBTEMA&id=<?php echo $reg['id_subtema'];?>">Eliminar</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
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