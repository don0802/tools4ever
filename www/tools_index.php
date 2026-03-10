<?php
include 'database.php';

if (isset($_GET['filter']) && isset($_GET['value'])) {
    $filter = $_GET['filter'];
    $value = $_GET['value'];
    $query = "SELECT * FROM tools WHERE $filter = '$value'";
} else {
    $query = "SELECT * FROM tools";
}
$result = mysqli_query($conn, $query);
$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!-- <a href="tools_detail.php?id=<?php echo $tool['id']; ?>">Bekijk gereedschap</a> -->

<div style="background: white; padding: 1rem; margin-bottom: 1rem; border-radius: 10px;">
    <strong>Filter op tool brand:</strong>
    <a href="tools_index.php">Alle tools</a> |
    <a href="tools_index.php?filter=brand&value=Hultafors">Hultafors</a> |
    <a href="tools_index.php?filter=brand&value=Stanley">Stanley</a> |
    <a href="tools_index.php?filter=brand&value=Bahco">Bahco</a> |
    <a href="tools_index.php?filter=brand&value=Bosch">Bosch</a> |
    <a href="tools_index.php?filter=brand&value=Makita">Makita</a> |
    <a href="tools_index.php?filter=brand&value=Metabo">Metabo</a> |
    <a href="tools_index.php?filter=brand&value=Black%20%26%20Decker">Black & Decker</a> |
    <a href="tools_index.php?filter=brand&value=Festool">Festool</a> |
    <a href="tools_index.php?filter=brand&value=Knipex">Knipex</a> |
    <a href="tools_index.php?filter=brand&value=BMI">BMI</a> |
    <a href="tools_index.php?filter=brand&value=Rubi">Rubi</a> |
    <a href="tools_index.php?filter=brand&value=Steinel">Steinel</a> |
    <a href="tools_index.php?filter=brand&value=K??rcher">K??rcher</a> |
    <a href="tools_index.php?filter=brand&value=Goudhaantje">Goudhaantje</a> |
    <a href="tools_index.php?filter=brand&value=Fluke">Fluke</a> |
    <a href="tools_index.php?filter=brand&value=Anza">Anza</a> |
</div>

<?php foreach ($tools as $tool): ?>
    <div>
        <h2><?php echo $tool['name']; ?></h2>
        <p><?php echo $tool['brand']; ?></p>
        <img src="<?php echo $tool['image']; ?>" alt="<?php echo $tool['name']; ?>" style="max-width: 100px;">
    </div>
<?php endforeach; ?>