<?php
ini_set('default_charset', 'UTF-8');
$servername = "foro-php-mysql";
$username = "dbuser";
$password = "dbpass";
$dbname = "dbname";
# $conn = new mysqli($servername, $username, $password, $dbname);
// Create Conection to database if DB not exist create and run the script in ../db/dump.sql

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
$db_selected = mysqli_select_db($conn, $dbname);
if (!$db_selected) {
    $sql = "CREATE DATABASE $dbname CHARACTER SET utf8 COLLATE utf8_general_ci";
    if ($conn->query($sql) === TRUE) {
        echo "Base de datos $dbname creada exitosamente.<br>";
        mysqli_select_db($conn, $dbname);
        // Importar el archivo SQL
        $dumpFile = '../db/dump.sql';
        $command = "mysql -h $host -u $username -p$password $dbname < $dumpFile";
        exec($command, $output, $result);
        if ($result === 0) {
            echo "Archivo SQL importado exitosamente.";
        } else {
            echo "Error al importar el archivo SQL.";
        }
    } else {
        die("Error al crear la base de datos: " . $conn->error);
    }
}
?>