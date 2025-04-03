<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect to the sign-in page if the user is not logged in
    header("Location: signin.html");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Chick-fil-A</title>
    <link rel="icon" href="images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <a href="index.html">
            <img src="images/logo.svg" alt="Chick-fil-A Logo">
        </a>

        <div class="nav-bar">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="order.html">Order Now</a></li>
            </ul>
        </div>

        <div class="buttons">
            <div class="sign-in">
                <a href="phpscripts/logout.php">
                    <button>Sign Out</button>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="profile-header">
            <h1>User Profile</h1>
            <p>Manage your account details below.</p>
        </div>

        <div class="profile-section">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="(123) 456-7890">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="preferences">Preferences</label>
                    <textarea id="preferences" name="preferences" placeholder="Your preferences or notes"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>Contact us: (123) 456-7890 | email@example.com</p>
        <p>Follow us on:
            <a href="https://facebook.com" target="_blank">Facebook</a> |
            <a href="https://twitter.com" target="_blank">X</a> |
            <a href="https://instagram.com" target="_blank">Instagram</a>
        </p>
    </div>
</body>
</html>