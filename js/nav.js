const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
        <div class="nav">
            <img src="img/logo.png" class="brand-logo" alt="">
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
            <li class="link-item"><a href="home.php" class="link">home</a></li>
            <li class="link-item"><a href="product.php" class="link">Products</a></li>
            <li class="link-item"><a href="aboutus.php" class="link">About Us</a></li>
            <li class="link-item"><a href="sizechart.php" class="link">Size Chart</a></li>
            <li class="link-item"><a href="faqs.php" class="link">FAQs</a></li>
        </ul>
    `;
}
createNav();
