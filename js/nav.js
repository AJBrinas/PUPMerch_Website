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
            <li class="link-item"><a href="#" class="link">home</a></li>
            <li class="link-item"><a href="#" class="link">Products</a></li>
            <li class="link-item"><a href="#" class="link">About Us</a></li>
            <li class="link-item"><a href="#" class="link">Size Chart</a></li>
            <li class="link-item"><a href="#" class="link">FAQs</a></li>
        </ul>
    `;
}
createNav();
