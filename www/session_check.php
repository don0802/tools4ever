<?php

session_start();

if(empty($_SESSION['user_id'])){
    echo "Je bent ingelogd <br>";
    echo "<a href='login.php'>Login hier</a>";
    exit;
}