<?php
session_start();
?>
<!DOCTYPE html>
<!-- Define el tipo de documento como HTML5 -->
<html lang="es">
<head>
    <!-- Configura la codificación de caracteres -->
    <meta charset="UTF-8">
    <!-- Permite un diseño responsivo en dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título que se mostrará en la pestaña del navegador -->
    <title>Inicio - CodeSprout</title>
    
    <!-- Enlace a los iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Enlaces a archivos CSS personalizados -->
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/comunidad.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/comunidad.css">
    <link rel="stylesheet" href="CSS/header.css">

</head>
<body>
    <!-- Encabezado con barra de navegación -->
    <header>
        <nav class="navbar">
            <!-- Logo del sitio -->
            <div class="logo">CodeSprout</div>

            <!-- Menú de navegación -->
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="HTML/material.php">Material</a></li>

                <?php if (isset($_SESSION['usuario'])): ?>
                    <li><a href="Controller/controllerHome.php?opcion=COMUNIDAD2">Comunidad</a></li>
                <?php else: ?>
                    <li><a href="Controller/controllerHome.php?opcion=COMENTARIOS">Comunidad</a></li>
                <?php endif; ?>
                <li><a href="Controller/controllerHome.php?opcion=EJEMPLOS">Ejemplos</a></li>
            </ul>

            <!-- Autenticacion -->
            <div class="auth-section nav-links2">
                <ul class="auth-list">
                    <?php if (!isset($_SESSION['usuario'])): ?>
                        <li><a href="HTML/login.php" class="login-btn">Iniciar sesión</a></li>
                        <li><a href="HTML/registro.php" class="register-btn">Registro</a></li>
                    <?php else: ?>
                        <li><a href="HTML/perfil.php"><i class="fas fa-user user-icon"></i></a></li>
                        <li><a href="Controller/controllerHome.php?opcion=CERRAR_SESION" class="logout-btn">Cerrar sesión</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Contenido principal de la página -->
    <main>
        <!-- Sección de bienvenida -->
        <section class="welcome-section">
            <div class="welcome-content">
                <h1>¡Bienvenidos a CodeSprout!</h1>
                <p class="subtitle">Nos emociona tenerlos aquí, estudiantes listos para sumergirse en el fascinante mundo del desarrollo web.</p>
                <p>En CodeSprout, creemos que la creatividad y la tecnología se unen para crear experiencias digitales increíbles...</p>
            </div>
            
            <!-- Espacio reservado para una imagen futura -->
            <div class="image-placeholder">
                <img src="Utilities/imagenes/web1.jpeg" alt="">
            </div>
        </section>

        <!-- Segunda sección: descripción del objetivo del sitio -->
        <section class="second-section">
            <!-- Espacio reservado para otra imagen -->
            <div class="second-image">
                <img src="Utilities/imagenes/web3.png" alt="">
            </div>

            <div class="second-content">
                <h2>Nuestro objetivo</h2>
                <p>Es brindarles las herramientas y el conocimiento necesarios para crear proyectos web.</p>
                <p>Aprenderán a codificar, resolver problemas y trabajar en equipo mediante materiales y proyectos prácticos.</p>
            </div>
        </section>
    </main>

    <!-- Pie de página con información de contacto -->
    <footer>
        <div class="footer-content">
            <p>Contacto: info@codesprout.com | Tel: 123-456-7890</p>
            <p>Dirección: Calle Falsa 123, Ciudad</p>
            <p>&copy; 2023 CodeSprout. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Enlace al archivo JavaScript de autenticación -->
    <script src="JS/autenticacion.js"></script>
</body>
</html>
