<?php
session_start();
if ($_SESSION['role'] !== 'delivery_driver') {
    header("Location: staff_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Welcome, Delivery Driver</h1>
    <p>Here you can track your assigned deliveries.</p>
    <!-- Add delivery tracking functionality -->
</body>
</html>