<?php
require_once "../model/model.php"; // Asegúrate de que la ruta sea correcta

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar campos vacíos
    if (empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: login.html?error=vacio");
        exit();
    }

    $correo = trim($_POST["email"]);
    $contrasena = trim($_POST["password"]);

    try {
        // Buscar usuario en la base de datos
        $sql = "SELECT id, nombre, correo, contrasena FROM registro WHERE correo = :correo";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":correo", $correo);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch();
            
            // Verificar contraseña
            if (password_verify($contrasena, $usuario['contrasena'])) {
                // Iniciar sesión
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $usuario["id"];
                $_SESSION["nombre"] = $usuario["nombre"];
                $_SESSION["correo"] = $usuario["correo"];
                
                header("Location: perfil.php");
                exit();
            }
        }
        
        // Si llega aquí, las credenciales son incorrectas
        header("Location: login.html?error=credenciales");
        exit();
        
    } catch (PDOException $e) {
        // Error de base de datos
        error_log("Error en login: " . $e->getMessage());
        header("Location: login.html?error=db");
        exit();
    }
}

// Si no es POST, redirigir
header("Location: login.html");
exit();
?>