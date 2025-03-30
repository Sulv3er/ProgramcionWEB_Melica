<?php
require_once "../model/model.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST["email"]);
    $contraseña = trim($_POST["password"]);

    try {
        // Buscar usuario en la base de datos
        $sql = "SELECT nombre, correo, contraseña FROM registro WHERE correo = :correo LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":correo", $correo);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch();
            
            // Verificar contraseña
            if (password_verify($contraseña, $usuario['contraseña'])) {
                // Iniciar sesión
                $_SESSION["loggedin"] = true;
                $_SESSION["correo"] = $usuario["correo"];
                $_SESSION["nombre"] = $usuario["nombre"];
                
                header("Location: perfil.php");
                exit();
            }
        }
        
        // Credenciales incorrectas
        header("Location: login.html?error=credenciales");
        exit();
        
    } catch (PDOException $e) {
        error_log("Error en login: " . $e->getMessage());
        header("Location: login.html?error=db");
        exit();
    }
}

header("Location: login.html");
exit();
?>