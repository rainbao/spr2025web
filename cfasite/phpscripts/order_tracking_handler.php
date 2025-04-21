<?php
require_once 'connect.php';

// Initialize variables
$error_message = "";
$order = null;

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Check if the user wants to view all their orders
    if (isset($_GET['view_all']) && $_GET['view_all'] === 'true') {
        try {
            // Fetch all orders associated with the logged-in user
            $stmt = $conn->prepare("SELECT * FROM orders WHERE user_id = (SELECT user_id FROM users WHERE username = :username)");
            $stmt->execute(['username' => $username]);
            $order = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$order) {
                $error_message = "No orders found for your account.";
            }
        } catch (PDOException $e) {
            $error_message = "An error occurred while fetching your orders.";
        }
    }
} else {
    // Non-logged-in user: Validate order_id and email
    if (isset($_GET['order_id']) && isset($_GET['email'])) {
        $order_id = intval($_GET['order_id']);
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);

        try {
            // Fetch the order details based on Order ID and Email
            $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = :order_id AND email = :email");
            $stmt->execute(['order_id' => $order_id, 'email' => $email]);
            $order = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$order) {
                $error_message = "Order not found. Please check your Order ID and Email.";
            }
        } catch (PDOException $e) {
            $error_message = "An error occurred while fetching the order details.";
        }
    } else {
        $error_message = "Please enter both your Order ID and Email to track your order.";
    }
}

// Return the results to the frontend
return [
    'order' => $order,
    'error_message' => $error_message
];
?>