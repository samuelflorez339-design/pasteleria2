<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>

<h2>Lista de Pedidos</h2>
<a href="crear.php">Nuevo Pedido</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Cliente</th>
    <th>Descripción</th>
    <th>Dirección</th>
    <th>Acciones</th>
</tr>

<?php
$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['cliente']}</td>
        <td>{$row['descripcion']}</td>
        <td>{$row['direccion']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>