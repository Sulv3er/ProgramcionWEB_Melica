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
    <link rel="stylesheet" href="../CSS/comunidad.css">
</head>
<body>

    <!-- Contenido principal de la página -->
    <main>
        
            <h1>Comunidad</h1>
        
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
                    
                    <!-- Formulario para escribir y enviar comentarios -->
                    <form class="comment-form" method="POST" action="../Controller/controllerHome.php">
                        <input type="hidden" name="opcion" value="GUARDAR_COMENTARIO">
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
                        
                        <!-- Botón para enviar el comentario -->
                        <button class="submit-btn" type="submit">Enviar</button>
                    </form>
                    
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
