<?php
require 'database.php';

if (empty($_POST['id'])) {
    echo "ID is required";
    exit;
}

if (empty($_POST['voornaam'])) {
    echo "Voornaam is required";
    exit;
}

if (empty($_POST['achternaam'])) {
    echo "Achternaam is required";
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Email moet een geldig email adres zijn";
    exit;
}

if (empty($_POST['password'])) {
    echo "Wachtwoord is required";
    exit;
}

if (strlen($_POST['password']) < 6) {
    echo "Wachtwoord moet minstens 6 karakters lang zijn";
    exit;
}

$id = $_POST['id'];
$firstname = $_POST['voornaam'];
$lastname = $_POST['achternaam'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['adres'];
$city = $_POST['stad'];
$is_active = isset($_POST['is_active']) ? 1 : 0;
$role = $_POST['role'];

$query = "INSERT INTO users (id, firstname, lastname, email, password, address, city, is_active, role) VALUES ('$id', '$firstname', '$lastname', '$email', '$password', '$address', '$city', '$is_active', '$role')";

try {
    $result = mysqli_query($conn, $query);
    
    if($result){
        header("Location: users_create_thankyou.php");
        exit;
    } else {
        echo "Account niet aangemaakt";
        exit;
    }
} catch (Exception $e) {
    header("Location: users_create_error.php");
    exit;
}