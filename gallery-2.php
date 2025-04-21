<?php include 'includes/header.php' ?>
<div class="about-head">
    <img src="bootstrap/images/about-head.png" alt="">
    <div class="hero-content">
            <h1>Our Gallery</h1>
            <h2><label class="text-light" for="">HOME /</label> OUR Gallery</h2>

        </div>
</div>
<section class="section-img-flex">
    <div class="flex-img">
    <div class="flex-main-image">
    <img id="currentImage" src="bootstrap/images/gallery-1.jpg" alt="Main View">
    
  </div>

  <div class="flex-thumbnails">
    <img src="bootstrap/images/gallery-2.jpg" alt="Thumb 1" onclick="changeImage(this)" class="active">
    <img src="bootstrap/images/gallery-3.jpg" alt="Thumb 2" onclick="changeImage(this)">
    <img src="bootstrap/images/gallery-4.jpg" alt="Thumb 3" onclick="changeImage(this)">
    <img src="bootstrap/images/gallery-5.jpg" alt="Thumb 4" onclick="changeImage(this)">
    <img src="bootstrap/images/gallery-6.jpg" alt="Thumb 5" onclick="changeImage(this)">
    <img src="bootstrap/images/gallery-7.jpg" alt="Thumb 5" onclick="changeImage(this)">
    <img src="bootstrap/images/gallery-8.jpg" alt="Thumb 5" onclick="changeImage(this)">



  </div>
    </div>
   
</section>
<?php include 'includes/footer.php';?>