 const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="container">
     <div class="wrapper">
    <div class="footer-widget">
        <img src="img/footer-logo.png" class="logo" alt="">
        <p class="desc">
            The fashion-forward apparel line for every PUPian, because excellent brains deserve outstanding look. We strive to create one-of-a-kind t-shirt designs that can be worn on a regular basis.
            </p>
            <ul class="socials">
              <li>
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Quick Link</h6>
            <ul class="links">
              <li><a href="home.php">Home</a></li>
              <li><a href="product.php">Products</a></li>
              <li><a href="aboutus.php">About us</a></li>
              <li><a href="sizechart.php">Size Chart</a></li>
              <li><a href="faqs.php">FAQs</a></li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Products</h6>
            <ul class="links">
              <li><a href="allproducts.php">T-Shirts</a></li>
              <li><a href="#">Lanyards</a></li>
              <li><a href="#">Jacket</a></li>
              <li><a href="#">Notebook</a></li>
            </ul>
          </div>
          <div class="footer-widget">
            <h6>Help &amp; Support</h6>
            <ul class="links">
              <li><a href="#">Support Center</a></li>
              <li><a href="#">Feedback</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">terms &amp; conditions</a></li>
            </ul>
          </div>
        </div>
        <div class="copyright-wrapper">
          <p>
            ALL RIGHTS RESERVED BY
            <a href="#" target="blank">LIKHA CLOTHING</a>
          </p>
        </div>
      </div>
    `;
}

createFooter();