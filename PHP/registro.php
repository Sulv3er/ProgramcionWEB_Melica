<?php
require_once "../model/model.php"; // Asegúrate de que la ruta sea correcta

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["name"]);
    $correo = trim($_POST["email"]);
    $contrasena = trim($_POST["password"]);
    $confirmar = trim($_POST["confirm-password"]);

    // Validaciones
    if (empty($nombre) || empty($correo) || empty($contrasena) || empty($confirmar)) {
        die("Por favor complete todos los campos.");
    }

    if ($contrasena !== $confirmar) {
        die("Las contraseñas no coinciden.");
    }

    if (strlen($contrasena) < 8) {
        die("La contraseña debe tener al menos 8 caracteres.");
    }

    // Verificar si el correo ya existe
    $sql_check = "SELECT id FROM registro WHERE correo = :correo";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->bindParam(":correo", $correo);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        die("Este correo ya está registrado.");
    }

    // Hash de la contraseña
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $sql = "INSERT INTO registro (nombre, correo, contrasena, confirmar) 
            VALUES (:nombre, :correo, :contrasena, :confirmar)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":nombre", $nombre);
    $stmt->bindParam(":correo", $correo);
    $stmt->bindParam(":contrasena", $contrasena_hash);
    $stmt->bindParam(":confirmar", $contrasena_hash); // Almacenamos el hash también aquí

    if ($stmt->execute()) {
        header("Location: registro_exitoso.html");
        exit();
    } else {
        echo "Error al registrar. Por favor intente más tarde.";
    }

    unset($pdo);
}
?>