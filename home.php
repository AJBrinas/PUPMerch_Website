
    <!--Automatic Slideshow-->
    <?php include 'header.php';
 ?>
     <link rel="stylesheet" href="css/home.css" />
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
                <h2 class="product-category">best selling</h2>

                <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/card1.png" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">Iskolar Shirt</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">₱200</span>
                        </div>
                    </div>
             <!--product2-->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/card2.png" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">Iskolar Shirt</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">₱250</span>
                        </div>
                    </div>
                <!--product3-->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/card3.png" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span>
                        </div>
                    </div>
                <!--product4-->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/card4.png" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span>
                        </div>
                    </div>
                <!--product5-->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/card5.png" class="product-thumb" alt="">
                            <button class="card-btn">add to cart</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span>
                        </div>
                    </div>
                    <br>
<!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
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
