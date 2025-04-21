<?php
session_start();
if ($_SESSION['role'] !== 'kitchen_staff') {
    header("Location: staff_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Welcome, Kitchen Staff</h1>
    <p>Here you can update the progress of active orders.</p>
    <!-- Add order progress update functionality -->
</body>
</html>