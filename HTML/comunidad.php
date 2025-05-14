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
            <!-- Primera publicación de ejemplo -->
            <div class="forum-post">
                <h3>Pregunta sobre el tema X</h3>
                <p>Publicado por: Usuario123 - Hace 2 días</p>
                <p>¿Alguien puede explicarme cómo funciona el tema X? Tengo algunas dudas...</p>
            </div>
            <!-- Segunda publicación de ejemplo -->
            <div class="forum-post">
                <h3>Respuesta a duda común</h3>
                <p>Publicado por: Experto2023 - Hace 1 día</p>
                <p>Aquí está la explicación que estabas buscando sobre ese tema...</p>
            </div>
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
