<?php
ini_set('default_charset', 'UTF-8');
include('config.php');

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

return $conn;
?>
