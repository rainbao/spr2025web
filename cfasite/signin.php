<?php
session_start();
require_once 'phpscripts/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chick-fil-A Sign-In</title>
    <link rel="icon" href="images/logo.svg" type="image/x-icon">
    <link rel = "stylesheet" href = "style.css">
   
</head>
<body>
    <!-- Header -->
    <?php
    include 'phpscripts/header.php';
    ?>

    <div class="container">

            <img src="images/cfa.png" alt="Chick-fil-A Logo">
            <h1>Sign In</h1>

        <form action = "phpscripts/signin.php" method = "POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign In</button>
            </div>
        </form>
        <p style="text-align: center;">Forgot your password? <a href="reset_password.html" style="color: #e51636;">Reset it</a></p>
        <p style="text-align: center;">Don't have an account? <a href="signup.php" style="color: #e51636;">Sign Up</a></p>
    </div>


    <!-- Footer -->
    <?php
    include 'phpscripts/footer.php';
    ?>


</body>
</html>