<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<!-- Declaración del tipo de documento: HTML5 -->
<html lang="es">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->
    <title>Material - CodeSprout</title> <!-- Título que aparece en la pestaña del navegador -->

    <!-- Enlaces a hojas de estilo externas -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Íconos de Font Awesome -->
    <link rel="stylesheet" href="../CSS/material.css"> <!-- Estilos específicos para la página de material -->
    <link rel="stylesheet" href="../CSS/index.css"> <!-- Estilos generales del sitio -->
    <link rel="stylesheet" href="../CSS/comunidad.css"> <!-- Estilos adicionales para comunidad -->
</head>
<body>
<<<<<<< HEAD:HTML/material.html
    <!-- Encabezado del sitio con barra de navegación -->
    <header>
        <nav class="navbar">
            <div class="logo">CodeSprout</div> <!-- Logo de la página -->
            <ul class="nav-links">
                <!-- Enlaces del menú principal -->
                <li><a href="index.html">Inicio</a></li>
                <li><a href="material.html">Material</a></li>
                <li class="dropdown">
                    <a href="comunidad.html" class="dropbtn">Comunidad</a>
                    <!-- Submenú desplegable -->
                    <div class="dropdown-content">
                        <a href="comunidad2.html">Comunidad 2</a>
                    </div>
                </li>
                <li><a href="ejemplos.html">Ejemplos</a></li>

                <!-- Sección de autenticación: login, registro, perfil -->
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
>>>>>>> 72ccb7253292564e510d6cfeffbcac0ba400152b:HTML/material.php
    <main>
        <h1>Material de Estudio</h1> <!-- Título principal -->

        <!-- Sección de contenido con imagen y texto -->
        <section class="content-section">
            <div class="image-container">
                <!-- Enlace a una lista de reproducción de YouTube -->
                <a href="https://www.youtube.com/playlist?list=PLE8uP447fYpis_9iiaT1GrdOLmg85pAJB" class="image-link">
                    <div class="placeholder-box"></div> <!-- Espacio reservado para imagen -->
                </a>
            </div>
            <div class="text-content">
                <h2>Módulo 1: Introducción a HTML</h2>

                <!-- Lección 1 -->
                <div class="lesson">
                    <h3>Lección 1: ¿Qué es HTML?</h3>
                    <ul>
                        <li>Explicación de qué es HTML y su función en la creación de páginas web</li>
                        <li>Historia breve de HTML</li>
                        <li>Diferencia entre HTML, CSS y JavaScript</li>
                        <li>Ejemplos de páginas web creadas con HTML</li>
                    </ul>
                </div>

                <!-- Lección 2 -->
                <div class="lesson">
                    <h3>Lección 2: Estructura básica de un documento HTML</h3>
                    <ul>
                        <li>Explicación de las etiquetas &lt;html&gt;, &lt;head&gt;, &lt;title&gt; y &lt;body&gt;</li>
                        <li>Creación de un documento HTML básico</li>
                        <li>Uso de editores de código (Visual Studio Code, Sublime Text, etc.)</li>
                        <li>Visualización de la página web en un navegador</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Segunda sección invertida: texto a la izquierda, imagen a la derecha -->
        <section class="content-section reverse">
            <div class="text-content">

                <!-- Lección 3 -->
                <div class="lesson">
                    <h3>Lección 3: Etiquetas de texto</h3>
                    <ul>
                        <li>Uso de etiquetas de encabezado (&lt;h1&gt; a &lt;h6&gt;)</li>
                        <li>Uso de etiquetas de párrafo (&lt;p&gt;)</li>
                        <li>Uso de etiquetas de formato de texto (&lt;strong&gt;, &lt;em&gt;, &lt;u&gt;, etc.)</li>
                        <li>Ejercicios prácticos de formato de texto</li>
                    </ul>
                </div>

                <!-- Lección 4 -->
                <div class="lesson">
                    <h3>Lección 4: Listas e imágenes</h3>
                    <ul>
                        <li>Creación de listas ordenadas (&lt;ol&gt;) y desordenadas (&lt;ul&gt;)</li>
                        <li>Inserción de imágenes (&lt;img&gt;) y atributos (src, alt, width, height)</li>
                        <li>Ejercicios prácticos de creación de listas e inserción de imágenes</li>
                    </ul>
                </div>

                <!-- Lección 5 -->
                <div class="lesson">
                    <h3>Lección 5: Enlaces y tablas</h3>
                    <ul>
                        <li>Creación de enlaces (&lt;a&gt;) y atributos (href, target)</li>
                        <li>Creación de tablas (&lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;)</li>
                        <li>Ejercicios prácticos de creación de enlaces y tablas</li>
                    </ul>
                </div>
            </div>

            <div class="image-container">
                <!-- Otro enlace con espacio reservado para imagen -->
                <a href="TU_LIGA_AQUI" class="image-link">
                    <div class="placeholder-box"></div>
                </a>
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

    <!-- Script para autenticación u otras funciones -->
    <script src="../JS/auth.js"></script>
</body>
</html>
