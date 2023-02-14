<html>
    <title>Products</title>
    <head>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/product.css">
    </head>
       
<body>  
    <!--Product details-->
    <nav class="navbar"></nav>
    <section class="product-details">
        <div class="image-slider">
            <div class="product-images">
                <img src="img/card10.png" class="active" alt="">
                <img src="img/shirt4.jpg" alt="">
            </div>
        </div>
        <div class="details">
            <h2 class="product-brand">Likha Shirt</h2>
            <p class="product-short-des">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          
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
    
            <button class="btn cart-btn">add to cart</button>
          
        </div>
    </section>

    <!--product container with slide-->
    <section class="product">
        <h2 class="product-category">Products</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/shirt1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$20</span>
                </div>
            </div>
    <!--product2 container-->
            <div class="product-card">
                <div class="product-image">
                    <img src="img/shirt2.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product3 container-->
            <div class="product-card">
                <div class="product-image">
                    <img src="img/shirt3.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product4 container-->
            <div class="product-card">
                <div class="product-image">
                    <img src="img/shirt4.jpg" class="product-thumb" alt="">
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
                    <img src="img/shirt5.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$20</span>
                </div>
            </div>
        <!--product6-->
            <div class="product-card">
                <div class="product-image">
        
                    <img src="img/shirt6.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-des">a short line about the cloth..</p>
                    <span class="price">$20</span>
                </div>
            </div>
     </div>
    </section>
    
<?php include 'footer.php';
?>
        <script src="js/nav.js"></script>
        <script src="js/home.js"></script>
        <script src="js/products.js"></script>

</body>
</html>
