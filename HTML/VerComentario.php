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
    <style>
        .comentarios-table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
        }
        .comentarios-table th, .comentarios-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .comentarios-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .comentarios-table tr:hover {
            background-color: #f5f5f5;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
            <h1>Comentarios</h1>
            <hr><br>
            
            <?php
            // Asumiendo que tienes una conexión a la base de datos y los comentarios están en $comentarios
            if(isset($comentarios) && count($comentarios) > 0): ?>
                <table class="comentarios-table">
                    <thead>
                        <tr>
                            <th>Correo</th>
                            <th>Título</th>
                            <th>Comentario</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($comentarios as $comentario): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($comentario['correo']); ?></td>
                            <td><?php echo htmlspecialchars($comentario['titulo']); ?></td>
                            <td><?php echo htmlspecialchars($comentario['comentario']); ?></td>
                            <td><?php echo htmlspecialchars($comentario['fecha_comentario']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No hay comentarios para mostrar.</p>
            <?php endif; ?>
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