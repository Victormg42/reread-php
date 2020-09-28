<?php
$host="localhost";
$user="root";
$pass="qweQWE123";
$db="reread_bd";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
    mysqli_set_charset($conn, "utf8");
}

?>