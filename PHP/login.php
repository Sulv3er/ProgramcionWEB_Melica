<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validar credenciales (ejemplo básico)
    if ($email === 'test@test.com' && $password === '123') {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Credenciales incorrectas']);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
}
?>