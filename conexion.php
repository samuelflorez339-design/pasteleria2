<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pasteleria";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>