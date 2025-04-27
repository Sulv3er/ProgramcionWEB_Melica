<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - CodeSprout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/perfil.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
</head>

<body>
    <main>
        <div class="profile-container">
            <div class="profile-header">
                <img src="https://via.placeholder.com/120" alt="Foto de perfil" class="profile-pic">
                <h1 id="profile-title">Mi Perfil</h1>
            </div>
            <div class="profile-info">
                <div><strong>Nombre:</strong> <span id="profile-name"></span></div>
                <div><strong>Email:</strong> <span id="profile-email"></span></div>
                <div><strong>Miembro desde:</strong> <span id="profile-date"></span></div>
                <div><strong>Actividad reciente:</strong> <span id="profile-activity"></span></div>
            </div>
            <button id="logout-btn">Cerrar Sesión</button>
            <button id="logout-btn">Editar perfil</button>
        </div>
    </main>
    <script src="../JS/auth.js"></script>
</body>
</html>