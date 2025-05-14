<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptabilidad a distintos dispositivos -->
    <title>Perfil - CodeSprout</title> <!-- Título que aparece en la pestaña del navegador -->

    <!-- Enlaces a hojas de estilo externas -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Íconos Font Awesome -->
    <link rel="stylesheet" href="../CSS/perfil.css"> <!-- Estilos para la página de perfil -->
    <link rel="stylesheet" href="../CSS/comunidad.css"> <!-- Estilos adicionales para elementos relacionados con comunidad -->
</head>

<body>
    <main>
        <div class="profile-container">
            <div class="profile-header">
                <!-- Imagen de perfil y título -->
                <img src="https://via.placeholder.com/120" alt="Foto de perfil" class="profile-pic">
                <h1 id="profile-title">Mi Perfil</h1>
            </div>
            <div class="profile-info">
                <!-- Información del perfil que se mostrará dinámicamente con JavaScript -->
                <div><strong>Nombre:</strong> <span id="profile-name"></span></div>
                <div><strong>Email:</strong> <span id="profile-email"></span></div>
                <div><strong>Miembro desde:</strong> <span id="profile-date"></span></div>
                <div><strong>Actividad reciente:</strong> <span id="profile-activity"></span></div>
            </div>

            <!-- Botones para cerrar sesión y editar perfil -->
            <button id="logout-btn">Cerrar Sesión</button>
            <button id="logout-btn">Editar perfil</button> <!-- Este botón tiene el mismo id, lo cual debería corregirse -->
        </div>
    </main>

    <!-- Script para autenticación y manejo de sesión del usuario -->
    <script src="../JS/auth.js"></script>
</body>
</html>
