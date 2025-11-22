<?php
// Cuando lo subas al hosting, cambia estos valores por los que te de 000webhost/InfinityFree
$host = "db"; // En docker es el nombre del servicio. En hosting será algo como 'sql123.infinityfree.com'
$user = "user";
$pass = "password";
$db   = "miblog";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>