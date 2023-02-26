
<?php 
    include 'header.php';
?>
<?php
session_start();
error_reporting(0);
include('config/config.php');
if ($_SESSION['adminlog'] != '') {
    header("location: admin/dashboard.php");
    exit;
} else if ($_SESSION['UserLog'] != '') {
    header("location: UserLog.php");
    exit;
}
?>
<!-- -Automatic Slideshow -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/slideshow.js" defer></script>
        <header class="intro">
            <div class="intro-slideshow">
        <img src="img/banner1.png" class="slideshow-img">
        <img src="img/banner2.png" class="slideshow-img">
        <img src="img/banner3.png" class="slideshow-img">
        <img src="img/banner4.png" class="slideshow-img">
            </div>
        </header> 

<!--product best selling-->
<section class="product">
        <body style="background-color: #f5f5f5;">
            <h2 class="product-category">Best Selling</h2>
            <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/card1.png" class="product-thumb" alt="">
                        <a href="product/pupqc.php" style="text-decoration:none">
                        <button class="card-btn">add to cart</button></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">PUPQC</h2>
                        <p class="product-short-des">Limited Edition Likha Clothing PUPQC Merch</p>
                        <span class="price">$20</span>
                    </div>
                </div>
        <!--product2-->
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/card2.png" class="product-thumb" alt="">
                        <a href="product/iskolar.php" style="text-decoration:none">
                        <button class="card-btn">add to cart</button></a>
                
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Iskolar</h2>
                        <p class="product-short-des">Limited Edition Likha Clothing PUPQC Merch</p>
                        <span class="price">$20</span>
                    </div>
                </div>
            <!--product3-->
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/card3.png" class="product-thumb" alt="">
                        <a href="product/isko.php" style="text-decoration:none">
                        <button class="card-btn">add to cart</button></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Isko</h2>
                        <p class="product-short-des">Limited Edition Likha Clothing PUPQC Merch</p>
                        <span class="price">$20</span>
                    </div>
                </div>
            <!--product4-->
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/card4.png" class="product-thumb" alt="">
                        <a href="product/iskoiska.php" style="text-decoration:none">
                        <button class="card-btn">add to cart</button></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">Isko at Iska</h2>
                        <p class="product-short-des">Limited Edition Likha Clothing PUPQC Merch</p>
                        <span class="price">$20</span>
                    </div>
                </div>
            <!--product5-->
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/card5.png" class="product-thumb" alt="">
                        <a href="product/estpup.php" style="text-decoration:none">
                        <button class="card-btn">add to cart</button></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">PUP est 1904</h2>
                        <p class="product-short-des">Limited Edition Likha Clothing PUPQC Merch</p>
                        <span class="price">$20</span>
                    </div>
                </div>
                </div>
            </section>
        <!--collections-->
            <section class="collection-container">
                <a href="#" class="collection">
                    <img src="img/iskolarshirt.png" alt="">  
                </a>
                <a href="#" class="collection">
                    <img src="img/bigsale.png" alt="">
                </a>
                <a href="#" class="collection">
                    <img src="img/comingsoon.png" alt="">
                </a>
            </section>

            <script src="js/nav.js"></script>
            <script src="js/home.js"></script>
     <!--footer-->
<?php include 'footer.php';
       ?>