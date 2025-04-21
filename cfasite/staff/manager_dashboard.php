<?php
session_start();
if ($_SESSION['role'] !== 'manager') {
    header("Location: staff_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Welcome, Manager</h1>
    <p>Here you can manage accounts, track inventory, and assign orders.</p>
    <!-- Add management functionality -->
</body>
</html>