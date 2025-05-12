<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Define el conjunto de caracteres y configuración responsive -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título de la pestaña del navegador -->
    <title>Iniciar Sesión - CodeSprout</title>

    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Hojas de estilo personalizadas -->
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
<<<<<<< HEAD:HTML/login.html

    <!-- Encabezado con barra de navegación -->
    <header>
        <nav class="navbar">
            <div class="logo">CodeSprout</div>
            <ul class="nav-links">
                <!-- Enlaces de navegación -->
                <li><a href="index.html">Inicio</a></li>
                <li><a href="material.html">Material</a></li>
                <li class="dropdown">
                    <!-- Menú desplegable de Comunidad -->
                    <a href="comunidad.html" class="dropbtn">Comunidad</a>
                    <div class="dropdown-content">
                        <a href="comunidad2.html">Comunidad 2</a>
                    </div>
                </li>     
                <li><a href="ejemplos.html">Ejemplos</a></li>

                <!-- Enlaces del lado derecho (inicio de sesión, registro, perfil) -->
                <div class="right-items">
                    <li><a href="login.html" class="login-btn">Iniciar sesión</a></li>
                    <li><a href="registro.html" class="register-btn">Registro</a></li>
                    <li><a href="perfil.html"><i class="fas fa-user user-icon"></i></a></li>
                </div>
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
=======
    
>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/login.php
    <main>
        <div class="login-container">
            <div class="login-box">
                <h2>Iniciar Sesión</h2>
                
<<<<<<< HEAD:HTML/login.html
                <!-- Aquí se podrían mostrar mensajes de error si existen -->
=======
                <!-- Mostrar mensajes de error -->
        
>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/login.php
                <div class="error-message">
                    <!-- Formulario de inicio de sesión -->
                    <form id="login-form" method="POST" action="../PHP/login.php">
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit" class="login-button">Ingresar</button>
                    </form>

                    <!-- Enlace para registrarse si no tiene cuenta -->
                    <div class="register-link">
                        <p>¿No tienes cuenta? <a href="registro.html">Regístrate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pie de página -->
    <footer>
        <div class="footer-content">
            <p>Contacto: info@codesprout.com | Tel: 123-456-7890</p>
            <p>Dirección: Calle Falsa 123, Ciudad</p>
            <p>&copy; 2023 CodeSprout. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Script para autenticación u otras funciones relacionadas -->
    <script src="../JS/auth.js"></script>
</body>
</html>
