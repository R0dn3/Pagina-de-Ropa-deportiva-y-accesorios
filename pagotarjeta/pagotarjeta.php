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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Heaven</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <h2>Detalles de Pago</h2>
    <form id="paymentForm" method="post" action="procesar_pago.php">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" placeholder="Ingresa nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" id="email" name="email" placeholder="Ingresa correo" required>
        </div>
        <div class="form-group">
            <label for="cardNumber">Número de tarjeta</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Número de tarjeta" required>
        </div>
        <div class="form-group">
            <label for="expirationDate">Fecha de Expiración</label>
            <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
        </div>
        <div class="form-group">
            <label for="billingAddress">Dirección</label>
            <textarea id="billingAddress" name="billingAddress" placeholder="Dirección" required></textarea>
        </div>
        <input type="hidden" name="metodoPago" value="<?= htmlspecialchars($_POST['payment'] ?? '') ?>">
        <button type="submit">Realizar Pago</button>
    </form>
    <div id="message"></div>
</div>

</body>
</html>
