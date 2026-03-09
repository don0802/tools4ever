<?php
require 'database.php';

$query = "SELECT * FROM tools WHERE tool_id = " . $_GET['id'];
$result = mysqli_query($conn, $query);
$tool = mysqli_fetch_assoc($result);

require 'head.php';

?>

<?php include 'navbar.php'; ?>
<main>
    <div class="container">
        <h1><?php echo $tool['tool_name']; ?></h1>
        <p><?php echo $tool['tool_category']; ?></p>
        <p>Prijs: €<?php echo $tool['tool_price']; ?></p>
    </div>
</main>
<?php require 'footer.php' ?>