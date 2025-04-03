<?php

require_once 'connect.php'; 
require_once 'included_functions(1).php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $username = $_POST['username'];
    // Password encrypt using included_functinons
    $password = password_encrypt($_POST['password']); 

    // Prepare SQL query to insert user into the database
    $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (:email, :username, :password)");

    try {
        $stmt->execute([
            ':email' => $email,
            ':username' => $username,
            ':password' => $password
        ]);
        echo "Sign up successful!";
        header("Location: ../signin.html");
        exit();
        //If successful, redirect to the signin page
    }  catch (PDOException $e) {
        if ($e->getCode() == 23000) { 
            echo "<script>alert('Error: Email or username already exists.');</script>";
        } else {
            echo "<script>alert('Error: " . addslashes($e->getMessage()) . "');</script>";
        }
    }
}
?>