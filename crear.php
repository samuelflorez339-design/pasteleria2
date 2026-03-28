<?php include("conexion.php"); ?>

<?php
if ($_POST) {
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO pedidos(cliente, descripcion, direccion)
            VALUES ('$cliente','$descripcion','$direccion')";

    $conn->query($sql);

    header("Location: index.php");
}
?>

<h2>Nuevo Pedido</h2>

<form method="POST">
    Cliente: <input type="text" name="cliente"><br>
    Descripción: <input type="text" name="descripcion"><br>
    Dirección: <input type="text" name="direccion"><br>
    <button type="submit">Guardar</button>
</form>