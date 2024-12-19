<?php
if (!empty($_POST["btnmodificar"])) {
  if (!empty($_POST["nombre"]) && !empty($_POST["descripcion"]) && !empty($_POST["precio"]) && !empty($_POST["stock"]) && !empty($_POST["categoria"])&& !empty($_POST["imagen"])) {
    $id = $_POST["id"];
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

      
      $sql = $conexion->query("UPDATE producto SET nombre='$nombre', descripcion='$descripcion', precio=$precio, stock=$stock, IDcategoria=$categoria, imagen_url='$imagen' WHERE IDproducto=$id");

      if ($sql === TRUE) {
        header("Location: productos.php");
      } else {
        echo '<div class="alert alert-danger">Error al modificar: ' . $conexion->error . '</div>';
      }
    } else {
      echo '<div class="alert alert-warning">Los campos precio y stock deben ser numericos</div>';
    }
  } else {
    echo '<div class="alert alert-warning">Hay campos vacíos</div>';
  }
}
?>
