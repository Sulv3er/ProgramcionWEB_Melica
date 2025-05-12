<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Define la codificación de caracteres y la configuración de la ventana para dispositivos móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título que aparece en la pestaña del navegador -->
    <title>Comunidad - CodeSprout</title>
    
    <!-- Enlaces a hojas de estilo externas: íconos Font Awesome y estilos personalizados -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/comunidad2.css">
</head>
<body>
<<<<<<< HEAD:HTML/comunidad2.html
    <!-- Encabezado de la página con barra de navegación -->
    <header>
        <nav class="navbar">
            <!-- Logo del sitio -->
            <div class="logo">CodeSprout</div>
            
            <!-- Enlaces de navegación principales -->
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="material.html">Material</a></li>
                <li><a href="comunidad.html">Comunidad</a></li>
                <li><a href="ejemplos.html">Ejemplos</a></li>
                
                <!-- Sección de autenticación (login, registro, perfil) -->
                <div class="auth-section">
                    <ul class="auth-list">
                        <li><a href="login.html" class="login-btn">Iniciar sesión</a></li>
                        <li><a href="registro.html" class="register-btn">Registro</a></li>
                        <li><a href="perfil.html"><i class="fas fa-user user-icon"></i></a></li>
                    </ul>
                </div>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal de la página -->
=======
>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/comunidad2.php
    <main class="container">
        <!-- Encabezado de la sección de comunidad -->
        <div class="community-header">
            <h1>Comunidad</h1>
        </div>
        
        <!-- Layout de dos columnas -->
        <div class="two-column-layout">
            <!-- Columna izquierda: tarjetas de la comunidad -->
            <div class="left-column">
                <div class="cards-container">
                    <!-- Tarjeta 1 -->
                    <div class="community-card">
                        <h2>Tarjeta 1</h2>
                        <p>Texto contenido 2</p>
                        <p>Texto contenido</p>
                    </div>
                    
                    <!-- Tarjeta 2 -->
                    <div class="community-card">
                        <h2>Tarjeta 1</h2>
                        <p>Texto contenido 2</p>
                        <p>Texto contenido</p>
                    </div>
                    
                    <!-- Tarjeta 3 -->
                    <div class="community-card">
                        <h2>Tarjeta 1</h2>
                        <p>Texto contenido 2</p>
                        <p>Texto contenido</p>
                    </div>
                </div>
            </div>
        
            <!-- Columna derecha: sección de comentarios -->
            <div class="right-column">
                <div class="comments-section">
                    <h2>Súmate a la conversación</h2>
                    
<<<<<<< HEAD:HTML/comunidad2.html
                    <!-- Formulario para escribir y enviar comentarios -->
                    <div class="comment-form">
=======
                    <form class="comment-form" method="POST" action="../Controller/controllerHome.php">
                        <input type="hidden" name="opcion" value="GUARDAR_COMENTARIO">

>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/comunidad2.php
                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="email" name="email" placeholder="Tu correo electrónico" required>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label for="title-check">Título del comentario</label>
                            <input type="text" name="titulo_comentario" placeholder="Escribe un título" required>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label for="comment-check">Comentario / Pregunta</label>
                            <textarea name="comentario" placeholder="Escribe tu comentario o pregunta" required></textarea>
                        </div>
                        
<<<<<<< HEAD:HTML/comunidad2.html
                        <!-- Botón para enviar el comentario -->
                        <button class="submit-btn">Enviar</button>
                    </div>
=======
                        <button class="submit-btn" type="submit">Enviar</button>
                    </form>
>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/comunidad2.php
                    
                    <!-- Historial de comentarios anteriores -->
                    <div class="comments-history">
                        <h3>Historial de comentarios</h3>
                        <div class="comment-placeholder">
                            <p>Los comentarios aparecerán aquí...</p>
                        </div>
                    </div>
                </div>
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

    <!-- Script de autenticación (probablemente maneja inicio de sesión, etc.) -->
    <script src="../JS/auth.js"></script>
</body>
</html>
