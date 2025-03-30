<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso - CodeSprout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/registro.css">
    <style>
        .success-container {
            text-align: center;
            padding: 40px;
            max-width: 600px;
            margin: 0 auto;
        }
        .success-icon {
            color: #2ecc71;
            font-size: 72px;
            margin-bottom: 20px;
        }
        .success-message {
            font-size: 24px;
            margin-bottom: 30px;
            color: #2c3e50;
        }
        .countdown {
            color: #7f8c8d;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">CodeSprout</div>
            <ul class="nav-links">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="material.html">Material</a></li>
                <li><a href="comunidad.html">Comunidad</a></li>
                <li><a href="ejemplos.html">Ejemplos</a></li>
                <div class="right-items">
                    <li><a href="login.html" class="login-btn">Iniciar sesión</a></li>
                    <li><a href="perfil.html"><i class="fas fa-user user-icon"></i></a></li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="success-container">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1 class="success-message">¡Registro exitoso!</h1>
            <p>Tu cuenta ha sido creada correctamente.</p>
            <p class="countdown">Serás redirigido al login en <span id="countdown">5</span> segundos...</p>
            <a href="login.html" class="login-button">Ir al login ahora</a>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <p>Contacto: info@codesprout.com | Tel: 123-456-7890</p>
            <p>Dirección: Calle Falsa 123, Ciudad</p>
            <p>&copy; 2023 CodeSprout. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Redirección automática después de 5 segundos
        let seconds = 5;
        const countdownElement = document.getElementById('countdown');
        
        const countdown = setInterval(function() {
            seconds--;
            countdownElement.textContent = seconds;
            
            if (seconds <= 0) {
                clearInterval(countdown);
                window.location.href = 'login.html';
            }
        }, 1000);
    </script>
</body>
</html>