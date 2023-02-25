<?php
include '../header.php';

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
        <img src="../img/shirt7.jpg" class="sample" alt=""/>
            </div>  
        <div class="details">
            <h2 class="product-brand">PUP est</h2>
            <p class="product-short-des">Limited Edition Likha Clothing</p>
          
            <span class="selectproduct-price">₱290</span>
            <p class="product-sub-heading">select size</p>
    
            <input type="radio" name="size" value="s" checked hidden id="s-size">
            <label for="s-size" class="size-radio-btn check">s</label>
            <input type="radio" name="size" value="m" hidden id="m-size">
            <label for="m-size" class="size-radio-btn">m</label>
            <input type="radio" name="size" value="l" hidden id="l-size">
            <label for="l-size" class="size-radio-btn">l</label>
            <input type="radio" name="size" value="xl" hidden id="xl-size">
            <label for="xl-size" class="size-radio-btn">xl</label>
            <input type="radio" name="size" value="xxl" hidden id="xxl-size">
            <label for="xxl-size" class="size-radio-btn">xxl</label>
    
            <a href="../cart.php" style="text-decoration:none">
            <button class="btn confirm-btn">Confirm</button></a>
          
        </div>
    </section>

    <!-- product container with slide-->
    <section class="selectproduct">
        <h2 class="selectproduct-category">Products</h2>
        <div class="selectproduct-container">
        <!--product1-->
            <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/shirt2.jpg" class="product-thumb" alt="">
                    <a href="cats.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                </div>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">Cats of PUPQC</h2>
                    <p class="selproduct-short-des">Limited Edition Likha Clothing</p>
                    <span class="selectprice">₱230</span>
                </div>
            </div>
         <!--product2-->
            <div class="selectproduct-card">
                <div class="selectproduct-image">
                    <img src="../img/shirt3.jpg" class="product-thumb" alt="">
                    <a href="iskoiska.php" style="text-decoration:none">
                    <button class="card-btn">add to cart</button></a>
                </div>
                <div class="selectproduct-info">
                    <h2 class="selectproduct-brand">Isko at Iska</h2>
                    <p class="selproduct-short-des">Limited Edition Likha Clothing</p>
                    <span class="selectprice">₱350</span>
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
                    <span class="selectprice">₱200</span>
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