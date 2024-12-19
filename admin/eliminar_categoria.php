<?php
include "conexion.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    $sql = $conexion->query("UPDATE categoria SET activo = false WHERE IDcategoria = $id");

    if ($sql === TRUE) {
        
        header("Location: categorias.php"); 
        echo '<div class="alert alert-success">Categoría eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar: ' . $conexion->error . '</div>';
    }
} else {
    echo '<div class="alert alert-warning">ID de categoría no especificado</div>';
}
?>
