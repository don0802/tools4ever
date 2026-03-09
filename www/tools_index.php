<?php
include 'database.php';

$query = "SELECT * FROM tools ORDER BY tool_name";
$result = mysqli_query($conn, $query);
$tool = mysqli_fetch_assoc($result);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<a href="tools_detail.php?id=<?php echo $tool['tool_id']; ?>">Bekijk gereedschap</a>