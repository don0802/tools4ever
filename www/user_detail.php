<?php
include 'database.php';

if(isset($_GET['id'])) {
    $query = "SELECT * FROM users WHERE id = '" . $_GET['id'] . "' ORDER BY firstname";
} else {
    $query = "SELECT * FROM users ORDER BY firstname";
}

$result = mysqli_query($conn, $query);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

require 'head.php';
?>

<?php include 'navbar.php'; ?>
<main>
    <div class="container">
        <h1>Users</h1>
        <ul>
            <?php foreach ($users as $user): ?>
                <li><a href="user_detail.php?id=<?php echo $user['id']; ?>"><?php echo $user['firstname']; echo "<br>"; echo $user['lastname']; echo "<br>"; ?><?php echo $user['email']; echo "<br>"; ?><?php echo $user['address']; echo "<br>"; ?><?php echo $user['city']; echo "<br>"; ?><?php echo $user['role']; ?></a></li><br>
            <?php endforeach; ?>
        </ul>
</main>

<?php require 'footer.php' ?>