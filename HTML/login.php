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
    <main>
        <div class="login-container">
            <div class="login-box">
                <h2>Iniciar Sesión</h2>
                
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
