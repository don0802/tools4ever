<?php
session_start();

require 'database.php';

if (empty($_POST['email'])) {
    echo "Email is required";
    exit;
}
if (empty($_POST['password'])) {
    echo "Wachtwoord is required";
    exit;
}
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);

if (is_array($user) && $password == $user['password']) {
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];
    
    header("Location: dashboard.php");
    exit;
} else {
    echo "Email is bij ons onbekend";
    exit;
}