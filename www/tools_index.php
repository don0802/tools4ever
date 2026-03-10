<?php
include 'database.php';

if (isset($_GET['tool_category']) && isset($_GET['value'])) {
    $filter = $_GET['tool_category'];
    $value = $_GET['value'];
    $query = "SELECT * FROM tools WHERE $filter = '$value'";
} else {
    $query = "SELECT * FROM tools";
}
$result = mysqli_query($conn, $query);
$tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!-- <a href="tools_detail.php?id=<?php echo $tool['tool_id']; ?>">Bekijk gereedschap</a> -->

<div style="background: white; padding: 1rem; margin-bottom: 1rem; border-radius: 10px;">
    <strong>Filter op tool brand:</strong>
    <a href="tools_index.php">Alle tools</a> |
    <a href="tools_index.php?filter=tool_category&value=Handgereedschap">Handgereedschap</a> |
    <a href="tools_index.php?filter=tool_category&value=Elektrisch gereedschap">Elektrisch gereedschap</a> |
    <a href="tools_index.php?filter=tool_category&value=Meetgereedschap">Meetgereedschap</a>
    <a href="tools_index.php?filter=tool_category&value=Telgereedschap">Telgereedschap</a>
    <a href="tools_index.php?filter=tool_category&value=Kitgereedschap">Kitgereedschap</a>
    <a href="tools_index.php?filter=tool_category&value=Lijmgereedschap">Lijmgereedschap</a>
    <a href="tools_index.php?filter=tool_category&value=Stofafzuiging">Stofafzuiging</a>
    <a href="tools_index.php?filter=tool_category&value=Verfgereedschap">Verfgereedschap</a>
    
</div>

<?php foreach ($tools as $tool): ?>
    <div>
        <h2><?php echo $tool['tool_name']; ?></h2>
        <p><?php echo $tool['tool_brand']; ?></p>
    </div>
<?php endforeach; ?>