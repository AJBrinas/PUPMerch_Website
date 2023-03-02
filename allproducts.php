<?php include 'header.php';
    // include 'config/config.php';

$db = new Database;
$db->getProducts();
$result = $db->getResults();
?>

<html>
<title>All Products</title>

<head>
    <link rel="stylesheet" href="css/allproducts.css" />
</head>

<body>
    <!--Product details-->
    <nav class="navbar"></nav>
    <section class="allproducts">
        <h2 class="allproducts-category">All Products</h2>
        <!--Products-->
        <div class="allproducts-container">
        <!--Product1-->
        <?php 
                if (!empty($result))
                {
                    $count = 0;
                    foreach($result as $row)
                    {
            ?>
            <div class="allproducts-card">
                <div class="allproducts-image">
                    <img src="img/<?php echo $row['product_image'] ?>" class="allproducts-thumb" alt="">
                    <a href="lanyard1.php?id=<?php echo $row['product_id']?>" style="text-decoration:none">
                        <button class="allproductscard-btn">add to cart</button></a>
                </div>
                <div class="allproducts-info">
                    <h2 class="allproducts-brand"><?php echo $row['product_title'] ?></h2>
                    <p class="allproducts-short-des"><?php echo $row['product_desc'] ?></p>

                </div>
            </div>
            <?php }} else { echo "No"; } ?>


        </div>
    </section>
    </nav>

    <script src="js/nav.js"></script>
    <script src="js/home.js"></script>
    <script src="js/product.js"></script>
    <?php
    include 'footer.php';
    ?>