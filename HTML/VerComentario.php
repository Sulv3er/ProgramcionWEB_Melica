<?php 
include_once ('header_admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - CodeSprout</title>

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/CRUD_Ejemplos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <h1>Comentarios</h1>
            <hr><br>
            <table name="tablaEjemplos" id="tablaEjemplos" class="table table-striped m-1">
                <thead >
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Titulo</th>
                        <th>Comentario</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody >
                    <?php while($reg = $registros->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $reg['id_comentario']?></td>
                            <td><?php echo $reg['email']?></td>
                            <td><?php echo $reg['titulo_comentario']?></td>
                            <td><?php echo $reg['comentario']?></td>
                            <td><?php echo $reg['fecha_comentario']?></td>
                            <td><a class="btn btn-danger" href="../Controller/controllerHome.php?opcion=ELIMINAR_COMENTARIO&id=<?php echo $reg['id_comentario'];?>">Eliminar</a></td>
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