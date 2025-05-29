<?php 
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); 
    exit();
}

// Incluir el header adecuado según si es administrador
if (!empty($_SESSION['usuario']['es_admin']) && $_SESSION['usuario']['es_admin'] === true) {
    include_once('header_admin.php');
} else {
    include_once('header.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8"> <!-- Codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Adaptabilidad a distintos dispositivos -->
    <title>Perfil - CodeSprout</title> <!-- Título que aparece en la pestaña del navegador -->

    <!-- Enlaces a hojas de estilo externas -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Íconos Font Awesome -->
    <link rel="stylesheet" href="../CSS/perfil.css"> <!-- Estilos para la página de perfil -->
    <link rel="stylesheet" href="../CSS/comunidad.css"> <!-- Estilos adicionales para elementos relacionados con comunidad -->
</head>

<body>
    <main>
        <div class="profile-container">
            <div class="profile-header">
                <!-- Imagen de perfil y título -->
                <i class="fas fa-user-circle fa-7x profile-pic"></i>
                <h1 id="profile-title">Mi Perfil</h1>
            </div>
            <div class="profile-info">
                <div><strong>Nombre:</strong> <span id="profile-name"><?php echo $_SESSION['usuario']['nombre'] ?? 'No disponible'; ?></span></div>
                <div><strong>Email:</strong> <span id="profile-email"><?php echo $_SESSION['usuario']['email'] ?? 'No disponible'; ?></span></div>
                <div><strong>Miembro desde:</strong> <span id="profile-date"><?php echo $_SESSION['usuario']['fecha_registro'] ?? 'No disponible'; ?></span></div>
            </div>


            <!-- Botones para cerrar sesión y editar perfil -->
            <div class="profile-actions">
                <!-- Botón Cerrar Sesión como enlace estilizado -->
                <a href="../Controller/controllerHome.php?opcion=CERRAR_SESION" class="btn logoutP-btn">Cerrar Sesión</a>

                <!-- Botón Editar Perfil como enlace estilizado -->
                <a href="../Controller/controllerHome.php?opcion=EDITAR_USUARIO&id=<?php echo $_SESSION['usuario']['id_usuario'];  ?>" class="btn edit-btn">Editar Perfil</a>
            </div>

        </div>
    </main>

    <!-- Script para autenticación y manejo de sesión del usuario -->
</body>
</html>
