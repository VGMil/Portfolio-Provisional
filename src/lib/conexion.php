<?php

function getDatabaseConnection(): mysqli
{

    $host = 'db';
    $user = 'user';
    $pass = 'password';
    $db   = 'miblog';

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_error) {

        die("Error de conexión: " . $mysqli->connect_error);
    }

    // ¡Muy importante! Establecer el charset para evitar problemas con acentos y ñ
    $mysqli->set_charset("utf8mb4");

    return $mysqli;
}