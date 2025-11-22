<?php

require_once __DIR__.'/conexion.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}


$nombre = htmlspecialchars(isset($_POST['nombre']) ? strip_tags(trim($_POST['nombre'])) : '');
$email  = htmlspecialchars(isset($_POST['correo']) ? filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL) : '');
$mensaje_limpio = htmlspecialchars(isset($_POST['mensaje']) ? trim($_POST['mensaje']) : '');

$errores = [];

if (empty($nombre) || strlen($nombre) < 2 || strlen($nombre) > 50) {
    $errores[] = "El nombre debe tener entre 2 y 50 caracteres.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
}

if (empty($mensaje_limpio)) {
    $errores[] = "El mensaje esta vacio";
}

if (!empty($errores)) {
    $mensajeError = urlencode(implode(" - ", $errores));
    echo $mensajeError;
} else {



    $mysqli = getDatabaseConnection();
    $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?,?,?)";

    $query = $mysqli->prepare($sql);
    $query->bind_param("sss", $nombre, $email, $mensaje_limpio);

    if ($query->execute()) {
        header('Location: ../index.php');
    } else {
        echo "Error al ejecutar: " . $query->error;
    }

    $mysqli->close();
    $query->close();
}
