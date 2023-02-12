<html>
<title>PUP MERCH</title>
<head>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav">
            <img src="img/logo.png" class="logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="#"><img src="img/user.png" alt=""></a>
                <a href="#"><img src="img/cart.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="#" class="link">home</a></li>
            <li class="link-item"><a href="#" class="link">Products</a></li>
            <li class="link-item"><a href="#" class="link">About Us</a></li>
            <li class="link-item"><a href="#" class="link">Size Chart</a></li>
            <li class="link-item"><a href="#" class="link">FAQs</a></li>
        </ul>
        </nav>
        <header class="hero-section">
            <div class="content">
                <img src="img/light-logo.png" class="logo" alt="">
                <p class="sub-heading">best fashion collection of all time</p>
            </div>
        </header>
        <!--banner-->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="banner-img2.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                <img src="banner-img3.jpg" style="width:100%">
                </div>
                <br>
                <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                </div>
        </div>
                <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
             
               </script>
        <!--product-->
        <section class="product">
            <h2 class="product-category">best selling</h2>
            <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <span class="discount-tag">50% off</span>
                        <img src="img/card1.png" class="product-thumb" alt="">
                        <button class="card-btn">add to whislist</button>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">brand</h2>
                        <p class="product-short-des">a short line about the cloth..</p>
                        <span class="price">$20</span><span class="actual-price">$40</span>
                    </div>
                </div>
            </div>
        </section>
          <!--product-->
            <section class="product">
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-image">
                            <span class="discount-tag">50% off</span>
                            <img src="img/card1.png" class="product-thumb" alt="">
                            <button class="card-btn">add to whislist</button>
                        </div>
                        <div class="product-info">
                            <h2 class="product-brand">brand</h2>
                            <p class="product-short-des">a short line about the cloth..</p>
                            <span class="price">$20</span><span class="actual-price">$40</span>
                        </div>
                    </div>
                </div>
            </section>
        <!--collections-->
        <section class="collection-container">
            <a href="#" class="collection">
                <img src="img/women-collection.png" alt="">
                <p class="collection-title">women <br> apparels</p>
            </a>
            <a href="#" class="collection">
                <img src="img/men-collection.png" alt="">
                <p class="collection-title">men <br> apparels</p>
            </a>
            <a href="#" class="collection">
                <img src="img/accessories-collection.png" alt="">
                <p class="collection-title">accessories</p>
            </a>
        </section>

        <script src="js/nav.js"></script>
        <script src="js/home.js"></script>
</body>
</html>