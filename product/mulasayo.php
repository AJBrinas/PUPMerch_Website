<?php 
    include '../header.php';
    ?>

<html>
    <title>Products</title>
    <head>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/product.css">

    </head>
       
<body>  
    <!--Product details-->
    <body style="background-color: #f5f5f5;">
    <section class="product-details">
        <div class="image-slider">
            <div class="product-images">
                <img src="../img/card10.png" class="active" alt="">
                <img src="../img/shirt4.jpg" alt="">
            </div>
        </div>
        <div class="details">
            <h2 class="product-brand">Mula Sayo</h2>
            <p class="product-short-des">Limited Edition Likha Clothing</p>
          
            <span class="product-price">$99</span>

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
    
            <button class="btn cart-btn">
                <a href="../cart.php" style="text-decoration:none">add to cart</a>
                    </button>
          
        </div>
    </section>

    <!--product container with slide-->
    <section class="product">
        <h2 class="product-category">Products</h2>
        <button class="pre-btn"><img src="../img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="../img/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/shirt1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="mulabayan.php" style="text-decoration:none">add to cart</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Mula Sayo, Para sa Bayan</h2>
                    <p class="product-short-des">Limited Edition Likha Clothing</p>
                    <span class="price">$20</span>
                </div>
            </div>
    <!--product2 container-->
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/shirt2.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="cats.php" style="text-decoration:none">add to cart</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Cats of PUPQC</h2>
                    <p class="product-short-des">Limited Edition Likha Clothing</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product3 container-->
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/shirt3.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="iskoiska.php" style="text-decoration:none">add to cart</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Isko at Iska</h2>
                    <p class="product-short-des">Limited Edition Likha Clothing</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product4 container-->
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/shirt4.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="mulasayo.php" style="text-decoration:none">add to cart</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Mula Sayo</h2>
                    <p class="product-short-des">Limited Edition Likha Clothing</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product5-->
            <div class="product-card">
                <div class="product-image">
                    <img src="../img/shirt5.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="pupian.php" style="text-decoration:none">add to cart</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">PUPIAN</h2>
                    <p class="product-short-des">Limited Edition Likha Clothing</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product6-->
            <div class="product-card">
                <div class="product-image">
        
                    <img src="../img/shirt6.jpg" class="product-thumb" alt="">
                    <button class="card-btn">
                        <a href="iskolar.php" style="text-decoration:none">add to cart</a>
                    </button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Iskolar</h2>
                    <p class="product-short-des">Limited Edition Likha Clothing</p>
                    <span class="price">$20</span>
                </div>
            </div>
     </div>
    </section>    
  
        <script src="../js/productnav.js"></script>
        <script src="../js/home.js"></script>
        <script src="../js/products.js"></script>

</body>
</html>