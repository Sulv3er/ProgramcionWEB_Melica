<header>
        <nav class="navbar">
            <div class="logo">CodeSprout</div>
            <ul class="nav-links">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../HTML/material.php">Material</a></li>
                <?php if (isset($_SESSION['usuario'])): ?>
                    <li><a href="../Controller/controllerHome.php?opcion=COMUNIDAD2">Comunidad</a></li>
                <?php else: ?>
                    <li><a href="../Controller/controllerHome.php?opcion=COMENTARIOS">Comunidad</a></li>
                <?php endif; ?>
                <li><a href="../Controller/controllerHome.php?opcion=EJEMPLOS">Ejemplos</a></li>
                <li><a href="../HTML/AcercaDe.php">Acerca de</a></li>
            </ul>

            <div class="auth-section nav-links2">
                <ul class="auth-list">
                    <?php if (!isset($_SESSION['usuario'])): ?>
                    <li><a href="../HTML/login.php" class="login-btn">Iniciar sesión</a></li>
                    <li><a href="../HTML/registro.php" class="register-btn">Registro</a></li>
                    <?php else: ?>
                        <li><a href="../HTML/perfil.php"><i class="fas fa-user user-icon"></i></a></li>
                        <li><a href="../Controller/controllerHome.php?opcion=CERRAR_SESION" class="logout-btn">Cerrar sesión</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <!-- Enlace a los iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</header>