<?php

require 'database.php';
$query = "SELECT * FROM brands ORDER BY brand_name";
$result = mysqli_query($conn, $query);
$brands = mysqli_fetch_all($result, MYSQLI_ASSOC);

require 'head.php';
?>
    <?php include 'navbar.php'; ?>
<main>
    <div class="container">
        <h1>Brands</h1>
        <ul>
            <?php foreach ($brands as $brand ): ?>
                <li><a href="brand.php?id=<?php echo $brand['brand_id']; ?>"><?php echo $brand['brand_name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
<?php require 'footer.php' ?>