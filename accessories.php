<?php
include "db.php";

$sql = "SELECT * FROM products WHERE category='Accessories'";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-TRIC CENTER</title>
<link rel="stylesheet" href="products.css">
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

<div class="container">

<h2>Shop by Category</h2>

<div class="categories">

<div class="category">
<p>Power Banks</p>
</div>

<div class="category">

<p>Chargers</p>
</div>

<div class="category">
<p>Others</p>
</div>


</div>

<div class="featured-header">
<h2>POWER BANKS</h2>
</div>

<div class="products">


<?php
$sql = "SELECT * FROM products 
        WHERE category='Accessories' AND sub_category='PowerBanks'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<div class="product">
    <img src="images/<?php echo $row['image']; ?>" width="150">
    <h3><?php echo $row['name']; ?></h3>
    <p><?php echo $row['price']; ?> KSH</p>
    <button onclick="addToCart('<?php echo $row['name']; ?>', <?php echo $row['price']; ?>)">
Add to Cart
</button>
</div>

<?php } ?>

</div>

<div class="featured-header">
<h2>CHARGERS</h2>
</div>

<div class="products">

<?php
$sql = "SELECT * FROM products 
        WHERE category='Accessories' AND sub_category='Chargers'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<div class="product">
    <img src="images/<?php echo $row['image']; ?>" width="150">
    <h3><?php echo $row['name']; ?></h3>
    <p><?php echo $row['price']; ?> KSH</p>
    <button onclick="addToCart('<?php echo $row['name']; ?>', <?php echo $row['price']; ?>)">
Add to Cart
</button>
</div>

<?php } ?>
</div>

<div class="featured-header">
<h2>OTHERS</h2>
</div>

<div class="products">

<?php
$sql = "SELECT * FROM products 
        WHERE category='Accessories' AND sub_category='Others'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
?>

<div class="product">
    <img src="images/<?php echo $row['image']; ?>" width="150">
    <h3><?php echo $row['name']; ?></h3>
    <p><?php echo $row['price']; ?> KSH</p>
    <button onclick="addToCart('<?php echo $row['name']; ?>', <?php echo $row['price']; ?>)">
Add to Cart
</button>
</div>

<?php } ?>
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