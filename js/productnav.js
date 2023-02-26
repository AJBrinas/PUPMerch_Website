// Since we want navbar (eto ung mga buttons na home, faqs etc) in all pages,
// we create navbar with JS dynamically  and make a createNav function inside it.
// Sa loob ng function, gumamit tayo ng querySelector method to select nav elements.
// And then write its HTML using innerHTML na ang value non ay the same HTML elements
// that we have made home.php file para pwede na nating maremove lahat ng HTML
// elements from there at iimport ang nav.js to make the codes shorter.
// kaya sya sa home.php not in index.php kasi sa index.php ininclude na natin ung header don.
//bale hindi na tayo nag lagay ng <script src="js/nav.js"></script>.
//at sa tuwing makikita nyo tong script keme na yan, basahin nyo ung line 6 na comment ko.

const createNav = () => {
  let nav = document.querySelector(".navbar");

  nav.innerHTML = `
        <div class="nav">
            <img src="../img/logo.png" class="brand-logo" alt="">
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">
                    <img src="../img/search.png" width="35%" height="100%" alt="">
                    </button>
                </div>
                <link rel="stylesheet" href="../css/nav.css">
            <div class="dropdown">           
            <button class="dropbtn">
                <img src="../img/user.png" alt="user logo">             
            </button>
            
              
            <div class="dropdown-content">
                <a href="../mainlogin.php" class="link">Login</a>
                <a href="../register.php" class="link">Sign Up</a>
                </div>
        </div>
                <a href="../cart.php"><img src="../img/cart.png" alt="cart"></a>
            </div>
        </div>
        <ul class="links-container">
            <li class="link-item"><a href="../home.php" class="link">Home</a></li>
            <li class="link-item"><a href="../allproducts.php" class="link">Products</a></li>
            <li class="link-item"><a href="../aboutus.php" class="link">About Us</a></li>
            <li class="link-item"><a href="../sizechart.php" class="link">Size Chart</a></li>
            <li class="link-item"><a href="../faqs.php" class="link">FAQs</a></li>
        </ul>
    `;
};
createNav();
