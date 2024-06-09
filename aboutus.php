<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>
    <link rel="stylesheet" href="./carousel.css">
    <?php
    include './menu.html';
    ?>
</head>
<body>
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('https://www.edgecomputingworld.com/wp-content/uploads/sites/2/2023/07/Hero-image_1920.png');background-repeat:no-repeat;background-size:cover">
       <div class="container">
          <div class="carousel-caption text-start">
            <h1>June 24th to 30th</h1>
            <p class="opacity-75">University of Manchester, School of Sciences.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://s3.amazonaws.com/s3.mmoguildsites.com/s3/gallery_images/923256/original.jpg');background-size:cover;">>
        <div class="container" >
          <div class="carousel-caption">
            <h1>Excited about the event?</h1>
            <p>Prepare to embark on a thrilling journey into the future of technology! </p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://soundsweird.org/wp-content/uploads/2023/01/IMG_2967_1.jpg');background-size:cover;">>
        <div class="container" >
          <div class="carousel-caption text-end">
            <h1>This year theme : Robotics and AI</h1>
            <p>In Collaboration with the IUT of Béziers, the participants should solve puzzles that highlight the integration of these technologies in our daily lives.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <div class="second-part">  
<div class="album py-5 bg-body-tertiary">
  <div class="container">
      <h1 style="text-align: center;padding-bottom: 20px;">This edition special flyers !</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<div class="col">
  <div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" id="abt-1" width="100%" height="600">
    </svg>
  </div>
</div>
<div class="col">
  <div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" id="abt-2" width="100%" height="600">
    </svg>
  </div>
</div>
<div class="col">
  <div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" id="abt-3" width="100%" height="600">
    </svg>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="bg-dark text-secondary px-4 py-5 text-center">
        <h1 class="display-7 fw-semi-bold" style="color: white; padding-bottom:20px">Check our the promotional video ! </h1>
        <video controls src="./images/promotional_video/iuegw_promotional_video.mp4" width="100%" height="600px"></video>
</div>
<!-- Section pour les vidéos animées -->
<div class="bg-dark text-secondary px-4" style="padding-bottom: 50px;">
    <div class="row">
        <div class="col-md-6 pl-5">
            <div class="bg-dark text-secondary text-center">
                <h1 class="display-7 fw-semi-bold" style="color: white; padding-bottom:20px">Our animated logo ! <br>(Black background) </h1>
                <video controls src="./images/animated_logo/animated_logo_black_bg.mp4" width="100%" height="300px"></video>
            </div>
        </div>
        <div class="col-md-6">
            <div class="bg-dark text-secondary text-center">
                <h1 class="display-7 fw-semi-bold" style="color: white; padding-bottom:20px">Our animated logo ! <br>(White background) </h1>
                <video controls src="./images/animated_logo/animated_logo_white_bg.mp4"  width="100%" height="300px"></video>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<?php
    include './footer.html';
    ?>