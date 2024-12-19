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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/card.css">
    <title>Selecciona un método de pago</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h4>Select a <span style="color: #6064b6">Payment</span> method</h4>
        </div>

        <form action="pagotarjeta/pagotarjeta.php" method="post">
        <input type="radio" name="payment" id="visa" value="VISA">
            <input type="radio" name="payment" id="mastercard" value="Mastercard">
            <input type="radio" name="payment" id="paypal" value="Paypal">
            <input type="radio" name="payment" id="AMEX" value="AMEX">

            <div class="category">
                <label for="visa" class="visaMethod">
                    <div class="imgName">
                        <div class="imgContainer visa">
                            <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="">
                        </div>
                        <span class="name">VISA</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                    
               </label>

                <label for="mastercard" class="mastercardMethod">
                    <div class="imgName">
                        <div class="imgContainer mastercard">
                            <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                        </div>
                        <span class="name">Mastercard</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="paypal" class="paypalMethod">
                    <div class="imgName">
                        <div class="imgContainer paypal">
                            <img src="https://i.ibb.co/KVF3mr1/paypal.png" alt="">
                        </div>
                        <span class="name">Paypal</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="AMEX" class="amexMethod">
                    <div class="imgName">
                        <div class="imgContainer AMEX">
                            <img src="https://i.ibb.co/wQnrX86/American-Express.jpg" alt="">
                        </div>
                        <span class="name">AMEX</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>
            </div>

            <div class="btn-container">
                
                <button type="submit" style="text-decoration: none; color: rgb(250, 250, 250);">Next</button>
                
            </div>
        </form>
    </div>
    <script src="js/card.js"></script>
</body>
</html>
