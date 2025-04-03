<?php
session_start(); 
require_once 'connect.php'; 
require_once 'included_functions(1).php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"]; 
    $password = $_POST["password"];

    try {
        // Prepare SQL query to fetch user from the database
        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, store user info in session
            $_SESSION['username'] = $user['username'];

            // Go to landing page
            header("Location: ../landing.php");
            exit();
        } else {
            $empty=false;
            $message= "Incorrect username or password";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . ($e->getMessage());
    }
}
?>