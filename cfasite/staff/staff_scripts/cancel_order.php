<?php
require_once '../../phpscripts/connect.php';

session_start();

// Ensure the user is a manager
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'manager') {
    header("Location: ../staff_login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = intval($_POST['order_id']);

    try {
        // Delete the order and its associated items
        $stmt = $conn->prepare("DELETE FROM orders WHERE order_id = :order_id");
        $stmt->execute(['order_id' => $order_id]);

        // Redirect back to the view orders page with a success message
        header("Location: ../view_orders.php?success=Order #$order_id has been canceled.");
        exit();
    } catch (PDOException $e) {
        // Redirect back with an error message
        header("Location: ../view_orders.php?error=Failed to cancel the order.");
        exit();
    }
}
?>