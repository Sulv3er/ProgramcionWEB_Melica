<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - CodeSprout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
    
    <main>
        <div class="login-container">
            <div class="login-box">
                <h2>Iniciar Sesión</h2>
                
                <!-- Mostrar mensajes de error -->
        
                <div class="error-message">
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
                <div class="register-link">
                    <p>¿No tienes cuenta? <a href="registro.html">Regístrate</a></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <p>Contacto: info@codesprout.com | Tel: 123-456-7890</p>
            <p>Dirección: Calle Falsa 123, Ciudad</p>
            <p>&copy; 2023 CodeSprout. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="../JS/auth.js"></script>
</body>
</html>