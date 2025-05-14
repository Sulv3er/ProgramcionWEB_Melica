<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración de codificación y diseño responsivo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título de la pestaña del navegador -->
    <title>Registro - CodeSprout</title>

    <!-- Enlace a iconos de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Enlaces a hojas de estilo personalizadas -->
    <link rel="stylesheet" href="../CSS/registro.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">

    <!-- Estilos embebidos para mensajes de error y éxito -->
    <link rel="stylesheet" href="../CSS/index.css">

    <style>
        .error-message {
            color: #e74c3c;
            background-color: #fde8e8;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            display: none;
        }
        .success-message {
            color: #2ecc71;
            background-color: #e8fdf1;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>

    <!-- Contenido principal de la página -->
    <main>
        <div class="register-container">
            <div class="register-box">
                <!-- Título del formulario -->
                <h2>Crear Cuenta</h2>

                <!-- Mensajes dinámicos de error y éxito -->
                <div id="error-message" class="error-message"></div>
                <div id="success-message" class="success-message"></div>

                <!-- Formulario de registro -->
                <form id="register-form">
                    <div class="form-group">
                        <label for="name">Nombre completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>
                        <small class="password-hint">Mínimo 8 caracteres, incluir mayúsculas y números</small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmar contraseña</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    
                    <!-- Botón para enviar el formulario -->
                    <button type="submit" class="register-button">Registrarse</button>
                </form>

                <!-- Enlace para usuarios que ya tienen cuenta -->
                <div class="login-link">
                    <p>¿Ya tienes cuenta? <a href="login.html">Inicia sesión</a></p>
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

    <!-- Script de autenticación (validación o manejo del formulario) -->
    <script src="../JS/auth.js"></script>
</body>
</html>
