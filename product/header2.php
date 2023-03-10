<?php 
    // include 'config/config.php';
?>
<html>
<head>
    <title>PUPQC MERCH</title>
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <nav class="navbar">
      <div class="nav">
            <img src="../img/logo.png" class="brand-logo" alt="">
          <nav class="navbar">
            <div class="nav-items">
                <div class="search">
                <label for="search-bar"></label>
                <input type="text" class="search-box" id="search-bar" placeholder="search brand, product"/>
                <button onclick="search()" class="search-btn">
                <img src="../img/search.png" width="35%" height="100%" alt="">
                </button>                  
                <script src="../js/search.js"></script> 
            </div>

            <div class="dropdown">           
            <button class="dropbtn">
                <img src="../img/user.png" alt="user logo">            
            </button>
            
            <div class="dropdown-content">
                <a href="../index.php" class="link">Logout</a>
            </div>
        </div> 

                <img src="../img/cart.png" alt="cart">
                
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="../home.php" class="link">Home</a></li>
            <li class="link-item"><a href="../allproducts.php" class="link">Products</a></li>
            <li class="link-item"><a href="../aboutus.php" class="link">About Us</a></li>
            <li class="link-item"><a href="../sizechart.php" class="link">Size Chart</a></li>
            <li class="link-item"><a href="../faqs.php" class="link">FAQs</a></li>
        </ul>
    </div>
    </nav>

    <script src="../js/nav.js"></script>
