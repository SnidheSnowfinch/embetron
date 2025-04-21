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
                <div class="footer-flex"><ul>
                
                <li><a href="index.php"><i class="bi bi-arrow-up-right"></i>Home</a></li>
                    <li><a href="about.php"><i class="bi bi-arrow-up-right "></i>About Us</a></li>
                    <li><a href="services.php"><i class="bi bi-arrow-up-right"></i>Services</a></li>

                </ul>
                <ul>
                <li><a href="our-gallery.php"><i class="bi bi-arrow-up-right"></i>Gallery</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right"></i>Products</a></li>
                    <li><a href="#"><i class="bi bi-arrow-up-right"></i>Knoweldge Center</a></li>

                </ul></div>
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
        if(slides[index]){
        slides[index].classList.add('active');
    }

}
    function goToNextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function goToPrevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }
if(prevBtn){
    prevBtn.addEventListener('click', () => {
        goToPrevSlide();
        resetInterval();
    });}
    if(nextBtn){

    nextBtn.addEventListener('click', () => {
        goToNextSlide();
        resetInterval();
    });}

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


    const carousel = document.getElementById('carousel');
  const prevBtnReview = document.querySelector('.prev-review');
  const nextBtnReview = document.querySelector('.next-review');
  const dotsContainer = document.getElementById('dots');
  const test_card = document.querySelector('testimonial-card');
  if(test_card){

  const cardWidth = document.querySelector('.testimonial-card').offsetWidth + 20;
  const totalCards = document.querySelectorAll('.testimonial-card').length;
  const cardsPerView = 4;
  const totalPages = Math.ceil(totalCards / cardsPerView);
  let currentIndex = 0;
  
  // Create dots
  for (let i = 0; i < totalPages; i++) {
    const dot = document.createElement('div');
    dot.classList.add('dot');
    if (i === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
      carousel.scrollTo({ left: i * carousel.offsetWidth, behavior: 'smooth' });
    });
    dotsContainer.appendChild(dot);
  }
}
  const updateDots = () => {
    const index = Math.round(carousel.scrollLeft / carousel.offsetWidth);
    document.querySelectorAll('.dot').forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  };
if(nextBtnReview){
  nextBtnReview.addEventListener('click', () => {
    carousel.scrollBy({ left: carousel.offsetWidth, behavior: 'smooth' });
  });
}
if(prevBtnReview){
  prevBtnReview.addEventListener('click', () => {
    carousel.scrollBy({ left: -carousel.offsetWidth, behavior: 'smooth' });
  });

  carousel.addEventListener('scroll', () => {
    updateDots();
  });

  window.addEventListener('resize', () => {
    updateDots();
  });}

  function changeImage(element) {
      // Change main image
      const mainImage = document.getElementById('currentImage');
      mainImage.src = element.src;

      // Update active thumbnail
      const thumbnails = document.querySelectorAll('.flex-thumbnails img');
      thumbnails.forEach(thumb => thumb.classList.remove('active'));
      element.classList.add('active');
    }


    const counters = document.querySelectorAll('.counter');
    let started = false;

    const options = {
      threshold: 0.6
    };

    const animateCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      let count = 0;
      const speed = 200; // lower = faster

      const step = () => {
        const increment = target / speed;
        if (count < target) {
          count += increment;
          counter.innerText = Math.floor(count).toLocaleString();
          requestAnimationFrame(step);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };
      step();
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !started) {
          counters.forEach(counter => animateCounter(counter));
          started = true;
        }
      });
    }, options);

    counters.forEach(counter => observer.observe(counter));
</script>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>