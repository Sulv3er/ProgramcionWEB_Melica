<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<!-- Define que este documento es HTML5 -->
<html lang="es">
<head>
    <!-- Configuración del conjunto de caracteres y escalado responsivo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos - CodeSprout</title>

    <!-- Enlaces a hojas de estilo externas, incluyendo íconos de Font Awesome y estilos propios -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/ejemplos.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>

    <!-- Contenido principal -->
    <main>
        <h1>Ejemplos Prácticos</h1>

        <!-- Contenedor de los ejemplos -->
        <div class="examples-wrapper">

            <!-- Columna izquierda: lista de ejemplos -->
            <div class="examples-list">
                <div class="example-item active" data-target="example1">
                    <h3>Ejemplo 1</h3>
                    <p>Descripción breve del primer ejemplo</p>
                </div>
                <div class="example-item" data-target="example2">
                    <h3>Ejemplo 2</h3>
                    <p>Descripción breve del segundo ejemplo</p>
                </div>
                <div class="example-item" data-target="example3">
                    <h3>Ejemplo 3</h3>
                    <p>Descripción breve del tercer ejemplo</p>
                </div>
                <div class="example-item" data-target="example4">
                    <h3>Ejemplo 4</h3>
                    <p>Descripción breve del cuarto ejemplo</p>
                </div>
                <div class="example-item" data-target="example5">
                    <h3>Ejemplo 5</h3>
                    <p>Descripción breve del quinto ejemplo</p>
                </div>
            </div>

            <!-- Columna derecha: contenido detallado de los ejemplos -->
            <div class="example-content">

                <!-- Detalles del Ejemplo 1 -->
                <div id="example1" class="example-detail active">
                    <h2>Ejemplo 1: Estructura HTML</h2>
                    <!-- Imagen ilustrativa -->
                    <img src="https://via.placeholder.com/600x300" alt="Ejemplo 1">
                    
                    <!-- Código de ejemplo -->
                    <div class="code-example">
                        <h3>Código:</h3>
                        <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Mi página&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hola Mundo&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                    <p>Explicación detallada del primer ejemplo práctico.</p>
                </div>

                <!-- Detalles del Ejemplo 2 -->
                <div id="example2" class="example-detail">
                    <h2>Ejemplo 2: Formulario básico</h2>
                    <img src="https://via.placeholder.com/600x300" alt="Ejemplo 2">
                    <div class="code-example">
                        <h3>Código:</h3>
                        <pre><code>&lt;form action="/submit" method="post"&gt;
    &lt;label for="nombre"&gt;Nombre:&lt;/label&gt;
    &lt;input type="text" id="nombre" name="nombre"&gt;
    &lt;button type="submit"&gt;Enviar&lt;/button&gt;
&lt;/form&gt;</code></pre>
                    </div>
                    <p>Explicación detallada del segundo ejemplo práctico.</p>
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

    <!-- Enlaces a scripts de JavaScript -->
    <script src="../JS/ejemplos.js"></script>
    <script src="../JS/auth.js"></script>
</body>
</html>
