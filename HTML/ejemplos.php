<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplos - CodeSprout</title>
    <link rel="stylesheet" href="../CSS/ejemplos.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>
<body>
<main>
    <h1>Ejemplos Prácticos</h1>
    <div class="examples-wrapper">
        <!-- Lista lateral -->
        <div class="examples-list">
            <?php
            $i = 0;
            foreach ($ejemplos as $ejemplo) {
                $active = ($i === 0) ? "active" : "";
                echo "<div class='example-item $active' data-target='example{$ejemplo['id_ejemplo']}'>";
                echo "<h3>" . htmlspecialchars($ejemplo['titulo']) . "</h3>";
                echo "<p>" . htmlspecialchars($ejemplo['descripcion']) . "</p>";
                echo "</div>";
                $i++;
            }
            ?>
        </div>

        <!-- Contenido derecho -->
        <div class="example-content">
            <?php
            $i = 0;
            foreach ($ejemplos as $ejemplo) {
                $active = ($i === 0) ? "active" : "";
                echo "<div id='example{$ejemplo['id_ejemplo']}' class='example-detail $active'>";
                echo "<h2>" . htmlspecialchars($ejemplo['titulo']) . "</h2>";
                echo "<img src='https://via.placeholder.com/600x300' alt='Imagen ejemplo'>";
                echo "<div class='code-example'>";
                echo "<h3>Código:</h3>";
                echo "<pre><code>" . htmlspecialchars($ejemplo['codigo']) . "</code></pre>";
                echo "</div>";
                echo "<p>" . htmlspecialchars($ejemplo['descripcion']) . "</p>";
                echo "</div>";
                $i++;
            }
            ?>
        </div>
    </div>
</main>
<footer>
    <div class="footer-content">
        <p>Contacto: info@codesprout.com | Tel: 123-456-7890</p>
        <p>&copy; 2023 CodeSprout. Todos los derechos reservados.</p>
    </div>
</footer>
<script src="../JS/ejemplos.js"></script>
</body>
</html>
