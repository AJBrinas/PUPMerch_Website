

const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <footer>
            <div class="footer-content">
                <img src="img/footer-logo.png" class="logo" alt="">
                <div class="footer-ul-container">
                    <ul class="category">
                        <li class="category-title">Contact us</li>
                        <li><a href="#" class="footer-link">Email</a></li>
                        <li><a href="#" class="footer-link">Facebook Page</a></li>
                        <li><a href="#" class="footer-link">Instagram</a></li>
                    </ul>
                    <div class="footer-social-container">
                        <div>
                            <a href="#" class="social-link">terms & services</a>
                            <a href="#" class="social-link">privacy page</a>
                        </div>
                </div>
            </div>
        </footer>
    `;
}

createFooter();