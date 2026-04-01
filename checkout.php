<?php
include "db.php";
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<title>Checkout</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <header class="navbar">
    <div class="menu-icon" onclick="openMenu()">
<i class="fa fa-bars"></i>
</div>

<!-- SIDEBAR MENU -->
<div id="sideMenu" class="side-menu">

<div class="menu-header">
<h2>E-TRIC CENTER</h2>
<span class="close-btn" onclick="closeMenu()">×</span>
</div>

<a href="index.php">Home</a>
<a href="accessories.php">Accessories </a>
<a href="apple.php">Apple </a>
<a href="pixel.php">Google Pixel </a>
<a href="oraimo.php">Oraimo </a>
<a href="samsung.php">Samsung </a>
<a href="storage.php">Storage</a>


</div>
    <div class="logo">E-TRIC <span>CENTER</span></div>

    <a href="cart.php" class="cart">
        <i class="fa fa-shopping-cart"></i>
        <span id="cart-count">0</span>
    </a>
</header>    


<section class="hero">
    
   
    <div class="search-box">
        <input type="text" id="search" placeholder="Search for products...">
    </div>

</section>


<section class="categories">


<div class="navbar1">

<a href="storage.php">Storage</a>

<a href="accessories.php">Accessories</a>

<a href="apple.php">Apple</a>
<a href="oraimo.php">Oraimo</a>

<a href="pixel.php">Google Pixel</a>

<a href="samsung.php">Samsung</a>
</div>


</section>

<div class="checkout-container">

<h2>Checkout</h2>

<div class="order-summary">
<h3>Order Summary</h3>
<p>Total: <span id="total-price">0</span> KSH</p>
</div>

<form class="checkout-form">

<input type="text" placeholder="Full Name" required>

<input type="tel" placeholder="Phone Number" required>

<input type="text" placeholder="Delivery Address" required>

<button type="submit" class="checkout-btn">
Place Order
</button>

</form>

</div>
<style>
    .checkout-container{
background:white;
padding:40px;
width:400px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.15);
}

.checkout-container h2{
text-align:center;
margin-bottom:25px;
color:#5F4A8B;
}

/* Form */

.checkout-form{
display:flex;
flex-direction:column;
gap:15px;
}

.checkout-form input{
padding:12px;
border-radius:6px;
border:1px solid #ccc;
font-size:14px;
}

.checkout-form input:focus{
outline:none;
border-color:#5F4A8B;
}

/* Button */

.checkout-btn{
background:#5F4A8B;
color:white;
border:none;
padding:12px;
border-radius:6px;
font-size:16px;
cursor:pointer;
transition:0.3s;
}

.checkout-btn:hover{
background:#4a3970;
}

/* Order Summary */

.order-summary{
margin-top:20px;
padding:15px;
background:#FEFACD;
border-radius:6px;
}

.order-summary h3{
margin-bottom:10px;
}

.total{
font-weight:bold;
margin-top:10px;
}
</style>

<footer class="footer">
    <div class="footer-links">
        <a href="index.php">Home</a>
        <span>|</span>
        <a href="contact.html">Contact Us</a>
                
    </div>
        <div class="footer-contact">
            <p>Phone number: <strong>+254 798 905 758</strong></p>
            <p>Email: <strong>e-tric@gmail.com</strong></p>
            <p>Address:  <strong>E-TRIC CENTRE ltd,<br> Behind Naivas<br>Along, Mlolongo Lane</p>
        </div>

        </footer>

        <script>
            let cart = JSON.parse(localStorage.getItem("cart")) || [];

let total = 0;

cart.forEach(item => {
total += item.price * item.quantity;
});

document.getElementById("total-price").innerText = total;
        </script>

<script src="script.js"></script>

</body>
</html>