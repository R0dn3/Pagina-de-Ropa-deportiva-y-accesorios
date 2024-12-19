<?php
session_start();
include "admin/conexion.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_producto']) && isset($_POST['cantidad'])) {
    $id_cliente = $_SESSION['IDcliente']; 
    $id_producto = intval($_POST['id_producto']);
    $cantidad = intval($_POST['cantidad']);

    
    $sql = $conexion->prepare("SELECT * FROM carrito WHERE IDcliente = ? AND IDproducto = ?");
    $sql->bind_param("ii", $id_cliente, $id_producto);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        
        $sql = $conexion->prepare("UPDATE carrito SET cantidad = cantidad + ? WHERE IDcliente = ? AND IDproducto = ?");
        $sql->bind_param("iii", $cantidad, $id_cliente, $id_producto);
    } else {
       
        $sql = $conexion->prepare("INSERT INTO carrito (IDcliente, IDproducto, cantidad) VALUES (?, ?, ?)");
        $sql->bind_param("iii", $id_cliente, $id_producto, $cantidad);
    }

    if ($sql->execute()) {
        echo '<div class="alert alert-success">Producto agregado al carrito.</div>';
    } else {
        echo '<div class="alert alert-danger">Error al agregar producto al carrito.</div>';
    }
    
    $sql->close();
    $conexion->close();
    
    
    header("Location: index.php");
    exit();
} else {
    echo '<div class="alert alert-warning">Datos inválidos.</div>';
}
?>

