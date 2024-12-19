<?php
include "conexion.php";

if (!empty($_GET["id"])) {
    $id = intval($_GET["id"]); // Asegurarse de que el ID es un número entero
    $sql = $conexion->query("DELETE FROM producto WHERE IDproducto = $id");

    if ($sql==1) {
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
        
        
    } else {
        echo '<div class="alert alert-danger">Error al eliminar: ' . $conexion->error . '</div>';
    }
} else {
    //echo '<div class="alert alert-warning">ID de producto no válido</div>';
}
?>
