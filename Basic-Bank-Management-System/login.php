<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process signup form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Store the user's information in the database
    // Code to insert into the database goes here

    // Redirect to login page or wherever you want
    header("Location: login.php");
    exit();
}
?>