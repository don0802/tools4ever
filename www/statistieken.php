<?php 
require 'database.php';

$query1 = "SELECT * FROM tools";
$result1 = mysqli_query($conn, $query1);
$tools = mysqli_fetch_all($result1, MYSQLI_ASSOC);

$query2 = "SELECT * FROM brands";
$result2 = mysqli_query($conn, $query2);
$brands = mysqli_fetch_all($result2, MYSQLI_ASSOC);

$query3 = "SELECT * FROM users";
$result3 = mysqli_query($conn, $query3);
$users = mysqli_fetch_all($result3, MYSQLI_ASSOC);

$totaalTools = count($tools);
$totaalBrands = count($brands);
$totaalUsers = count($users);

echo "<h2>Totaal tools: " . $totaalTools . "</h2>";
echo "<h2>Totaal brands: " . $totaalBrands . "</h2>";
echo "<h2>Totaal users: " . $totaalUsers . "</h2>";
?>