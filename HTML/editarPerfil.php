<?php 
include_once ('header.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - CodeSprout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../CSS/registro.css">
    <link rel="stylesheet" href="../CSS/comunidad.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <style>
        .error-message {
            color: #e74c3c;
            background-color: #fde8e8;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            display: none;
        }
        .success-message {
            color: #2ecc71;
            background-color: #e8fdf1;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
            display: none;
        }
    </style>
</head>
<body>
    <main>
        <div class="register-container">
            <div class="register-box">
                <h2>Editar perfil</h2>
                <div id="error-message" class="error-message"></div>
                <div id="success-message" class="success-message"></div>
                <form id="register-form" method="POST" action="../Controller/controllerHome.php?opcion=MODIFICAR_USUARIO">
                    <input type="hidden" name="id_usuario" value="<?php echo $registro['id_usuario'] ?? ''; ?>">

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" value="<?php echo $registro['nombre'] ?? ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" value="<?php echo $registro['email'] ?? ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" id="contraseña" name="contraseña" value="<?php echo $registro['contraseña'] ?? ''; ?>" required>
                        <small class="password-hint">Mínimo 8 caracteres, incluir mayúsculas y números</small>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirmar contraseña</label>
                        <input type="password" id="confirm-password" name="confirm-password">
                    </div>
                    
                    <button type="submit" class="register-button">Guardar</button>
                </form>
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
    <script src="../JS/autenticacion.js"></script>

</body>
</html>