<?php include('includes/header.php') ?>


<div class="container">
    <?php 
        require('../db/conn.php'); 
        $name = $_POST['name'];
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-0-]+/','-', $name)));
        $description = $_POST['description'];
        $summary = $_POST['summary'];
        $stock_status = $_POST['stock_status'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $discount_price = $_POST['discount_price'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        // $images = $_POST['images'];
        // $created_at = $_POST['created_at'];
        // $status = $_POST['status'];

        // get data from form

        // insert data into database
        $sql_str = "INSERT INTO `products` (`id`, `name`, `slug`, `description`, `summary`,
         `stock_status`, `stock`, `price`, `discount_price`, `images`, `category_id`, `brand_id`, `status`, `created_at`, `updated_at`) 
         VALUES (NULL, '$name', '$slug', '$description', '$summary', '$stock_status', $stock, $price, $discount_price, 'hinhanh.png', $category, $brand, 'active', NULL, NULL)";
        mysqli_query($conn, $sql_str);

        header('location: index.php');
    ?>

</div>



<?php include('includes/footer.php') ?>