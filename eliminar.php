<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM pedidos WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
?>