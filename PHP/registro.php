<?php
require_once "../model/model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y limpiar datos
    $nombre = trim($_POST["name"]);
    $correo = trim($_POST["email"]);
    $contraseña = trim($_POST["password"]);
    $confirmar = trim($_POST["confirm-password"]);

    // Validaciones
    if (empty($nombre) || empty($correo) || empty($contraseña) || empty($confirmar)) {
        header("Location: registro.html?error=vacio&name=".urlencode($nombre)."&email=".urlencode($correo));
        exit();
    }

    if ($contraseña !== $confirmar) {
        header("Location: registro.html?error=contrasena&name=".urlencode($nombre)."&email=".urlencode($correo));
        exit();
    }

    if (strlen($contraseña) < 8) {
        header("Location: registro.html?error=longitud&name=".urlencode($nombre)."&email=".urlencode($correo));
        exit();
    }

    try {
        // Verificar si el correo ya existe
        $sql_check = "SELECT correo FROM registro WHERE correo = :correo LIMIT 1";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->bindParam(":correo", $correo);
        $stmt_check->execute();

        if ($stmt_check->fetchColumn()) {
            header("Location: registro.html?error=correo&name=".urlencode($nombre)."&email=".urlencode($correo));
            exit();
        }

        // Hash de la contraseña
        $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

        // Insertar en la base de datos
        $sql = "INSERT INTO registro (nombre, correo, contraseña, confirmar) 
                VALUES (:nombre, :correo, :contraseña, :confirmar)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":correo", $correo);
        $stmt->bindParam(":contraseña", $contraseña_hash);
        $stmt->bindParam(":confirmar", $contraseña_hash);

        if ($stmt->execute()) {
            header("Location: registro_exitoso.php");
            exit();
        } else {
            header("Location: registro.html?error=db");
            exit();
        }

    } catch (PDOException $e) {
        error_log("Error en registro: " . $e->getMessage());
        header("Location: registro.html?error=db");
        exit();
    }
}

header("Location: registro.html");
exit();
?>