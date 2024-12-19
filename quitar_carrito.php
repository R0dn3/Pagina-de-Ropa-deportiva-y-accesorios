<?php
session_start();
include "admin/conexion.php";

if (isset($_SESSION['IDcliente'])) {
    $id_cliente = $_SESSION['IDcliente'];

    if (isset($_GET['id_producto'])) {
        $id_producto = intval($_GET['id_producto']);

        $sql = $conexion->prepare("DELETE FROM carrito WHERE IDcliente = ? AND IDproducto = ?");
        $sql->bind_param("ii", $id_cliente, $id_producto);

        if ($sql->execute()) {
            header("Location: carrito.php?msg=Producto eliminado del carrito.");
        } else {
            header("Location: carrito.php?error=No se pudo eliminar el producto.");
        }

        $sql->close();
    } else {
        header("Location: carrito.php?error=Producto no especificado.");
    }
} else {
    header("Location: login.php?error=Debe iniciar sesión para realizar esta acción.");
}

$conexion->close();
exit();
?>
