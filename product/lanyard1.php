<?php
include '../header.php';
$db = new Database;
$db->getProducts();
$result = $db->getResults();
?>

<html>
    <title>Products</title>
    <head>
        
        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/product.css">
        <link rel="stylesheet" href="../css/footer.css">
    </head>
       <body>
    <!--Product details-->
   
    <section class="product-details">
        <div class="image-slider">
        <img src="../img/lanyard1.png" class="sample" alt=""/>
            </div>  
        <div class="details">
            <h2 class="product-brand">Mula Sayo Para sa Bayan</h2>
            <p class="product-short-des">PUP Likha Lanyard</p>
            <span class="selectproduct-price">₱30</span><br>
          
            <a href="../cart.php" style="text-decoration:none">
            <button class="btn confirm-btn">Confirm</button></a>
          
        </div>
    </section>

    <!-- product container with slide-->
    <section class="selectproduct">
        <h2 class="selectproduct-category">Products</h2>
        <div class="selectproduct-container">
            <?php 
                if (!empty($result))
                {
                    $count = 0;
                    foreach($result as $row)
                    {
            ?>
        <!--product1-->
            <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/<?php echo $row['product_image'] ?>" class="product-thumb" alt="">
                    <a href="lanyard1.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                </div>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">Country's First</h2>
                    <p class="selproduct-short-des">PUP Likha Lanyard</p>
                    <span class="selectprice">₱30</span>
                </div>
            </div>
            <?php }} else { echo "No"; } ?>
                
         <!--product2-->
            <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/lanyard3.png" class="product-thumb" alt="">
                    <a href="lanyard3.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                </div>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">Light of Nation</h2>
                    <p class="selproduct-short-des">PUP Likha Lanyard</p>
                    <span class="selectprice">₱30</span>
                </div>
            </div>
            <!--product3-->
            <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/shirt9.jpg" class="product-thumb" alt="">
                    <a href="isko.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                </div>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">Isko</h2>
                    <p class="selproduct-short-des">Limited Edition Likha Clothing</p>
                    <span class="selectprice">₱250</span>
                </div>
            </div>
        <!--product4-->
        <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/shirt4.jpg" class="product-thumb" alt="">
                    <a href="mulasayo.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                </div>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">Mula Sayo</h2>
                    <p class="selproduct-short-des">Limited Edition Likha Clothing</p>
                    <span class="selectprice">₱300</span>
                </div>
            </div>
            <!--product5-->
            <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/shirt5.jpg" class="product-thumb" alt="">
                    <a href="pupian.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">PUPIAN/h2>
                    <p class="selproduct-short-des">Limited Edition Likha Clothing</p>
                    <span class="selectprice">$200</span>
                </div>
            </div>
            </div>
    </section>
       
 <?php include '../footer.php';
?>
        <script src="../js/productnav.js"></script>
        <script src="../js/home.js"></script>
        <script src="../js/products.js"></script>
</body>
</html>