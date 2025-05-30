<?php include('includes/header.php') ?>


<div class="container">
    <?php 
        require('../db/conn.php'); 
        $name = $_POST['name'];
        $description = $_POST['description'];
        $summary = $_POST['summary'];
        $stock_status = $_POST['stock_status'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $discount_price = $_POST['discount_price'];
        $images = $_POST['images'];
        $price = $_POST['price'];
        $status = $_POST['status'];

        // get data from form

        // insert data into database
        $sql_str = "INSERT INTO `products` (`id`, `name`, `slug`, `description`, `summary`,
         `stock_status`, `stock`, `price`, `discount_price`, `images`, `category_id`, `brand_id`, `status`, `created_at`, `updated_at`) 
         VALUES (NULL, '')";
        $result = mysqli_query($conn, $sql_str);

        header('location: index.php');
    ?>

</div>



<?php include('includes/footer.php') ?>