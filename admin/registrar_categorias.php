<?php
include "conexion.php";

if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) && !empty($_POST["imagen"])) {
        $nombre = $conexion->real_escape_string($_POST["nombre"]);
        $imagen = $conexion->real_escape_string($_POST["imagen"]);

        $sql = $conexion->query("INSERT INTO categoria(nombreCategoria, imagen_url) VALUES ('$nombre', '$imagen')");
        
        if($sql){
            echo '<div class="alert alert-success">Categoría registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar categoría: ' . $conexion->error . '</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos están vacíos</div>';
    }
}
?>

