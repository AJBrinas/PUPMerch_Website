
    <?php include 'header.php';
    $database = new Database;
    $database->limit();
    $result = $database->getResults();
 ?>
     <link rel="stylesheet" href="css/home.css" />
        <link rel="stylesheet" href="css/style.css">
         <!--Automatic Slideshow-->
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
                <?php 
                    if (!empty($result))
                    {
                        $count = 0;
                        foreach($result as $row)
                        { $count++;
                ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="img/<?php echo $row['product_image']; ?>" class="product-thumb" alt="">
                        <a href="lanyard1.php?id=<?php echo $row['product_id']; ?>" style="text-decoration:none">
                        <button class="card-btn">add to cart</button></a>
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand"><?php echo $row['product_title']; ?></h2>
                        <p class="product-short-des"><?php echo $row['product_desc']; ?></p>
                        <span class="price"><?php echo $row['product_price']; ?></span>
                    </div>
                </div>
                <?php }} else { ?>
                    <tr>
						<td>
							Blank
						</td>
					</tr>
                <?php } ?>
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
