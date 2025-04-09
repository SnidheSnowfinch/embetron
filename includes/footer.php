<footer class="footer">
    <div class="container">
        <div class="footer-container">
            <div class="footer-about">
                <img src="bootstrap/images/logo-img-top.png" alt="">
                <p>Crichstack is for the ones who love cake and we make that special for...</p>
                <div class="social-icons">

                    <label class="icon-nav"><i class="bi bi-instagram"></i></label>
                    <label class="icon-nav"><i class="bi bi-twitter"></i></label>
                    <label class="icon-nav"><i class="bi bi-facebook"></i></label>
                    <label class="icon-nav"><i class="bi bi-youtube"></i></label>
                </div>
            </div>
            <div class="footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><a href="#"><i class="bi bi-arrow-up-right mx-2"></i>Home</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right mx-2"></i>About Us</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right mx-2"></i>Services</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right mx-2"></i>Gallery</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right mx-2"></i>Products</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right mx-2"></i>Knoweldge Center</a></li>

                </ul>
            </div>
            <div class="footer-hours">
                <h4>Contact Us</h4>
                <ul>
                    <li>
                        <h5>Address Location</h5>
                        <div class="footer-flex"> <span class="footer-icon"><i class="bi bi-geo-alt"></i></span>
                            <p>
                                Flat no. 2/A, Shreeyesh terrace, <br> Warje, Pune - 411 052,India.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h5>Phone Number</h5>
                        <div class="footer-flex"> <span class="footer-icon"><i class="bi bi-telephone"></i></span>
                            <p>555222222222
                            </p>
                        </div>
                    </li>
                    <li>
                        <h5>Email Address</h5>
                        <div class="footer-flex"> <span class="footer-icon"><i class="bi bi-envelope"></i></span>
                            <p>info@embetronsolar.com
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Recent Posts</h4>
                <div class="footer-flex">
                    <img src="bootstrap/images/solar1.jpg" alt="">
                    <div>
                        <h5>Solar Incentives: Tax
                            Credits and Rebates</h5>
                        <p><i class="bi bi-calendar"></i>jan 4</p>
                    </div>
                </div>
                <div class="footer-flex">
                    <img src="bootstrap/images/solar2.jpg" alt="">
                    <div>
                        <h5>Solar Incentives: Tax
                            Credits and Rebates</h5>
                        <p><i class="bi bi-calendar"></i>jan 4</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</footer>
<div class="footer-bottom">
            <p>Copyright  © 2025</p>
            <p><span class="highlight mx-1">Embetron</span>All Right Reserved</p>
        </div>
</body>
<script>
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');

    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }

    function goToNextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function goToPrevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    prevBtn.addEventListener('click', () => {
        goToPrevSlide();
        resetInterval();
    });

    nextBtn.addEventListener('click', () => {
        goToNextSlide();
        resetInterval();
    });

    // Auto slide every 4 seconds
    function startAutoSlide() {
        slideInterval = setInterval(goToNextSlide, 4000);
    }

    // Reset interval if user clicks buttons
    function resetInterval() {
        clearInterval(slideInterval);
        startAutoSlide();
    }

    // Start auto sliding when page loads
    startAutoSlide();
</script>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>