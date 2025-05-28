<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Define la codificación de caracteres -->
    <meta charset="UTF-8">
    <!-- Define la vista para dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título de la pestaña del navegador -->
    <title>Comunidad - CodeSprout</title>
    
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Estilos específicos para la sección comunidad -->
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <!-- Estilos generales del sitio -->
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>

    <!-- Contenido principal de la página -->
    <main>
        <h1>Comunidad</h1>

        <!-- Contenedor de publicaciones del foro -->
        <div class="forum-container">
            <?php 
            if ($comentarios && $comentarios->num_rows > 0) {
                while ($fila = $comentarios->fetch_assoc()) {
                    echo '<div class="forum-post">';
                    echo '<h3>' . htmlspecialchars($fila['titulo_comentario']) . '</h3>';
                    echo '<p>Publicado por: ' . htmlspecialchars($fila['email']) . '</p>';
                    echo '<p>' . nl2br(htmlspecialchars($fila['comentario'])) . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No hay comentarios aún.</p>';
            }
            ?>
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

    <!-- Script para manejar la autenticación (iniciar sesión, cerrar sesión, etc.) -->
    <script src="../JS/auth.js"></script>
</body>
</html>
