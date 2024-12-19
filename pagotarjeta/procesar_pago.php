<?php
session_start();

if (isset($_SESSION['IDcliente'])) {
    $id_Cliente = $_SESSION['IDcliente'];
    //echo "Usuario identificado: $id_Cliente";
} else {
    echo "Usuario no identificado. Por favor inicia sesión.";
    header("Location: login.php");
    exit();
}

include "../admin/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $nombre = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $cardNumber = $_POST['cardNumber'] ?? '';
    $expirationDate = $_POST['expirationDate'] ?? '';
    $cvv = $_POST['cvv'] ?? '';
    $billingAddress = $_POST['billingAddress'] ?? '';
    $metodoPago = $_POST['metodoPago'] ?? '';

    // Validar que todos los campos estén presentes
    if (empty($nombre) || empty($email) || empty($cardNumber) || empty($expirationDate) || empty($cvv) || empty($billingAddress) || empty($metodoPago)) {
        echo "Error: Todos los campos son obligatorios.";
        exit();
    }

    // Añadir las compras del carrito a la tabla ventas
    $fecha = date("Y-m-d");

    $sql_carrito = $conexion->prepare("SELECT c.IDproducto, c.cantidad, p.precio FROM carrito c JOIN producto p ON c.IDproducto = p.IDproducto WHERE c.IDcliente = ?");
    $sql_carrito->bind_param("i", $id_Cliente);
    $sql_carrito->execute();
    $result_carrito = $sql_carrito->get_result();

    if ($result_carrito->num_rows > 0) {
        while ($row = $result_carrito->fetch_assoc()) {
            $id_producto = $row['IDproducto'];
            $cantidad = $row['cantidad'];
            $precio = $row['precio'];
            $subtotal = $precio * $cantidad;

            $sql_venta = $conexion->prepare("INSERT INTO ventas (IDcliente, IDproducto, cantidad, fecha, subtotal, metodo_pago) VALUES (?, ?, ?, ?, ?, ?)");
            $sql_venta->bind_param("iiisis", $id_Cliente, $id_producto, $cantidad, $fecha, $subtotal, $metodoPago);
            $sql_venta->execute();
        }

        // Vaciar el carrito después de realizar la compra
        $sql_vaciar_carrito = $conexion->prepare("DELETE FROM carrito WHERE IDcliente = ?");
        $sql_vaciar_carrito->bind_param("i", $id_Cliente);
        $sql_vaciar_carrito->execute();

        echo "Pago realizado con éxito.";
    } else {
        echo "El carrito está vacío.";
    }

    // Cerrar las conexiones
    $sql_carrito->close();
    if (isset($sql_venta)) $sql_venta->close();
    if (isset($sql_vaciar_carrito)) $sql_vaciar_carrito->close();
    $conexion->close();
    header("Location: ../index.php");
    exit();
}
?>

