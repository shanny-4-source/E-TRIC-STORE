<?php
include "db.php";

$sql = "SELECT * FROM products LIMIT 4";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-TRIC CENTER</title>
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
    <a href="login.php" class="login">Login</a>

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


<!-- PRODUCTS -->

<div class="products">

<?php
if($result->num_rows > 0){

while($row = $result->fetch_assoc()){
?>

<div class="product">

<img src="images/<?php echo $row['image']; ?>">

<h4><?php echo $row['name']; ?></h4>

<p>KSH <?php echo $row['price']; ?></p>

<button onclick="addToCart('<?php echo $row['name']; ?>', <?php echo $row['price']; ?>)">
Add to Cart
</button>

</div>

<?php
}
}
?>

</div>



<section class="categories-section">

<div class="category-card">

<img src="images/pixel icon.jpg">

<div class="category-text">
<h3>Google Pixel</h3>
<p>Pixel Phones</p>
<p>Pixel Buds</p>
<a href="pixel.php">Shop More >></a>
</div>

</div>


<div class="category-card">

<img src="images/apple icon (2).jpg">

<div class="category-text">
<h3>Apple</h3>
<p>Accessories</p>
<p>iPhone</p>
<p>MacBook</p>
<p>AirPods</p>
<a href="apple.php">Shop More >></a>
</div>

</div>


<div class="category-card">

<img src="images/Samsung icon.jpg">

<div class="category-text">
<h3>Samsung</h3>
<p>Galaxy S Series</p>
<p>Galaxy Z Series</p>
<p>Galaxy A Series</p>
<p>Galaxy M & F Series</p>
<a href="samsung.php">Shop More >></a>
</div>

</div>


<div class="category-card">

<img src="images/Oraimo icon.jpg">

<div class="category-text">
<h3>Oraimo</h3>
<p>Oraimo Watches</p>
<p>Headset</p>
<p>Oraimo Buds</p>
<p>Speakers</p>
<a href="oraimo.php">Shop More >></a>
</div>

</div>


<div class="category-card">

<img src="images/accessories icon (2).jpg">

<div class="category-text">
<h3>Accessories</h3>
<p>Earphones</p>
<p>Cables</p>
<p>Chargers</p>
<p>Powerbank</p>
<a href="accessories.php">Shop More >></a>
</div>

</div>


<div class="category-card">

<img src="images/storage icon.jpg">

<div class="category-text">
<h3>Storage</h3>
<p>Flash Drives</p>
<p>Hard Drives</p>
<p>Memory Cards</p>
<p>USB Hubs</p>
<a href="storage.php">Shop More >></a>
</div>

</div>

</section>

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

        

<script src="script.js"></script>

</body>
</html>