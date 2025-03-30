<?php
session_start();
require_once '../model/model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['name']);
    $correo = trim($_POST['email']);
    $contraseña = $_POST['password'];
    $confirmar_contraseña = $_POST['confirm-password'];

    $errores = [];

    // Validaciones
    if (empty($nombre)) {
        $errores[] = "El nombre completo es requerido";
    }

    if (empty($correo)) {
        $errores[] = "El correo electrónico es requerido";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El formato del correo electrónico no es válido";
    } else {
        // Verificar si el correo ya existe
        $sql = "SELECT COUNT(*) FROM registro WHERE correo = :correo";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        
        if ($stmt->fetchColumn() > 0) {
            $errores[] = "El correo electrónico ya está registrado";
        }
    }

    if (empty($contraseña)) {
        $errores[] = "La contraseña es requerida";
    } elseif (strlen($contraseña) < 8) {
        $errores[] = "La contraseña debe tener al menos 8 caracteres";
    } elseif (!preg_match("/[A-Z]/", $contraseña) || !preg_match("/[0-9]/", $contraseña)) {
        $errores[] = "La contraseña debe contener al menos una mayúscula y un número";
    } elseif ($contraseña !== $confirmar_contraseña) {
        $errores[] = "Las contraseñas no coinciden";
    }

    if (empty($errores)) {
        $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

        try {
            $sql = "INSERT INTO registro (nombre, correo, contraseña, confirmar) 
                    VALUES (:nombre, :correo, :contraseña, :confirmar)";
            $stmt = $conexion->prepare($sql);
            
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':contraseña', $contraseña_hash);
            $stmt->bindParam(':confirmar', $contraseña_hash);

            if ($stmt->execute()) {
                $_SESSION['mensaje'] = "¡Registro exitoso! Ahora puedes iniciar sesión.";
                $_SESSION['tipo_mensaje'] = 'success';
            }
        } catch(PDOException $e) {
            $_SESSION['errores'] = ["Error al registrar: " . $e->getMessage()];
        }
    } else {
        $_SESSION['errores'] = $errores;
    }

    header("Location: ../HTML/registro.html");
    exit();
}
?>