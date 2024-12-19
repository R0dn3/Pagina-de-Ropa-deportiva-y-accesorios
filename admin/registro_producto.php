<?php
include "conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["descripcion"]) && !empty($_POST["precio"]) && !empty($_POST["stock"]) && !empty($_POST["categoria"])&& !empty($_POST["imagen"])) {
        
        $nombre = $conexion->real_escape_string($_POST["nombre"]);
        $descripcion = $conexion->real_escape_string($_POST["descripcion"]);
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $categoria = $_POST["categoria"];
        $imagen = $_POST["imagen"];

       
        if (is_numeric($precio) && is_numeric($stock) && is_numeric($categoria)) {
            $precio = floatval($precio);
            $stock = intval($stock);
            $categoria = intval($categoria);

           
            $sql = "INSERT INTO PRODUCTO (nombre, descripcion, precio, stock, IDcategoria, imagen_url) VALUES ('$nombre', '$descripcion', $precio, $stock, $categoria, '$imagen')";
            
          
            if ($conexion->query($sql) === TRUE) {
                echo '<div class="alert alert-success">Producto registrado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al registrar producto</div>';
            }
        } else {
            echo '<div class="alert alert-warning">Los campos precio y stock </div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}
?>
