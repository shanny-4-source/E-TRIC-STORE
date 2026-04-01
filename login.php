<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){

$user = $result->fetch_assoc();

if(password_verify($password, $user['password']))


$_SESSION['user'] = $user['name'];

header("Location: index.php");
exit();

}else{
$error = "Incorrect password";
}

}else{
$error = "User not found";
}

?>



<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="login.css">
</head>

<body>

<div class="login-box">

<h2>Login</h2>

<form action="login_process.php" method="POST">

<input type="email" name="email" placeholder="Enter Email" required>

<input type="password" name="password" placeholder="Enter Password" required>

<button type="submit">Login</button>

</form>

<p>Don't have an account? <a href="register.php">Register</a></p>

</div>

</body>
</html>
