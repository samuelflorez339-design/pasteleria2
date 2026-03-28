<?php include("conexion.php"); ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM pedidos WHERE id=$id";
$result = $conn->query($sql);
$pedido = $result->fetch_assoc();

if ($_POST) {
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $sql = "UPDATE pedidos 
            SET cliente='$cliente', descripcion='$descripcion', direccion='$direccion'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: index.php");
}
?>

<h2>Editar Pedido</h2>

<form method="POST">
    Cliente: <input type="text" name="cliente" value="<?php echo $pedido['cliente']; ?>"><br>
    Descripción: <input type="text" name="descripcion" value="<?php echo $pedido['descripcion']; ?>"><br>
    Dirección: <input type="text" name="direccion" value="<?php echo $pedido['direccion']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>