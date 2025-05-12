<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD:HTML/perfil.html
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
    <!-- Encabezado de la página con barra de navegación -->
    <header>
        <nav class="navbar">
            <div class="logo">CodeSprout</div> <!-- Logo o nombre del sitio -->
            <ul class="nav-links">
                <!-- Enlaces de navegación -->
                <li><a href="index.html">Inicio</a></li>
                <li><a href="material.html">Material</a></li>
                <li class="dropdown">
                    <a href="comunidad.html" class="dropbtn">Comunidad</a>
                    <div class="dropdown-content">
                        <a href="comunidad2.html">Comunidad 2</a>
                    </div>
                </li>     
                <li><a href="ejemplos.html">Ejemplos</a></li>
                <li id="user-profile-link"><a href="perfil.html"><i class="fas fa-user user-icon"></i></a></li> <!-- Ícono de usuario -->
            </ul>
        </nav>
    </header>

    <!-- Contenido principal de la página -->
=======
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - CodeSprout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/perfil.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>

<body>
>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/perfil.php
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
