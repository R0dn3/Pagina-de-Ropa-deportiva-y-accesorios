<?php
if (!empty($_POST["btnmodificar"])) {
  // Depuración: imprimir los valores recibidos
  echo "Nombre: " . $_POST["nombre"] . "<br>";
  echo "Imagen: " . $_POST["imagen"] . "<br>";
if (!empty($_POST["btnmodificar"])) {
  if (!empty($_POST["nombre"]) && !empty($_POST["imagen"])) {
    $id = $_POST["id"];
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $imagen = $conexion->real_escape_string($_POST["imagen"]);

      $sql = $conexion->query("UPDATE categoria SET nombreCategoria='$nombre', imagen_url='$imagen' WHERE IDcategoria=$id");

      if ($sql === TRUE) {
        header("Location: categorias.php");
      } else {
        echo '<div class="alert alert-danger">Error al modificar: ' . $conexion->error . '</div>';
      }
  } else {
    echo '<div class="alert alert-warning">Hay campos vacíos</div>';
  }
}}
?>