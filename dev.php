<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ecomm';
$connection = mysqli_connect($host, $user, $password, $database);

// Check for errors
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
<?php
// Retrieve the category data
$query = "SELECT * FROM category";
$result = mysqli_query($connection, $query);

// Check for errors
if (!$result) {
    echo "Failed to retrieve categories: " . mysqli_error($connection);
    exit();
}
?>


<!-- CSS for the card layout -->
<style>
    .card {
        width: 300px;
        border: 1px solid #ccc;
        margin: 10px;
        padding: 10px;
        float: left;
        box-sizing: border-box;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .card h3 {
        margin: 0;
    }

    .card p {
        margin: 10px 0;
    }

    .clearfix {
        clear: both;
    }
</style>

<!-- HTML for the card layout and product data -->
<div class="cards">
    <?php while ($product = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <!-- <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>"> -->
            <h3><?php echo $product['name']; ?></h3>
                <!-- <p><?php echo $product['description']; ?></p>
                <p>Price: <?php echo $product['price']; ?></p> -->
        </div>
    <?php endwhile; ?>
    <div class="clearfix"></div>
</div>
