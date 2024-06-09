<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Escape game - UMINT</title>
    <?php
    include './menu.html';
    ?>
    <div class="container col-xxl-16 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            <img id="home-1" src="https://2.bp.blogspot.com/-jDrQCkGrZEQ/U4db3kAc3_I/AAAAAAAAANY/LZR7bF7zFyk/s1600/UMIST.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="UMIST" width="700" height="500" loading="lazy" style="transition: transform 0.3s ease;"/>
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                    Inter-University Escape Game Week 2024
                </h2>
                <p class="lead">
                The University of Manchester, School of Sciences, is thrilled to host a groundbreaking event, the Inter-University Escape Game Week, in collaboration with the IUT de Béziers. This exciting partnership brings together students from different universities for an immersive experience focused on the cutting-edge themes of robotics and artificial intelligence.   </p>
                <div class="d-grid gap-2 d-md-flex text-center justify-content-md-start">
                <a class="btn btn-primary btn-lg px-4 me-md-2" href="./aboutus.php">More infos</a>  
                <a href="./contact.php" class="btn btn-outline-secondary btn-lg px-4">Join us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">This event is destined to you !</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Whether you're a student, a technology enthusiast, or just looking for a unique experience, this event is open to everyone. Don't miss out on this incredible opportunity to expand your knowledge and have fun.<br>Stay tuned for more details and registration information. We can't wait to welcome you to the 'Inter-University Escape Game Week' in Manchester!</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold" href="./products.php">Support us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                Join us in this event !
                </h2>
                <p class="lead">
                Join us for a week of thrilling adventure and intellectual challenge at the 'Inter-University Escape Game Week' in Manchester! This year's theme revolves around the fascinating world of Artificial Intelligence and Robotics, promising an unforgettable experience.
            <div id="anim" class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-success btn-lg px-4 me-md-2">
                      Thank us !
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                include './terre.html';
                ?>
            </div>
        </div>
    </div>

    <div class="bg-dark text-secondary px-4 py-5 text-center">
  <div class="container">
      <h1 class="fw-bold" style="text-align: center;padding-bottom: 20px;color:white;">Check our by-products</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<div class="col">
  <div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" id="image-1" width="100%" height="400">
    </svg>
    <div class="card-body">
      <h5 class="card-text text-center">Cap</h5>
      <div class="d-flex justify-content-center">
        <div class="btn-group">
          <a class="btn btn-sm btn-outline-secondary" href="./products.php">Buy</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col">
  <div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" id="image-2" width="100%" height="400">
    </svg>
    <div class="card-body">
      <h5 class="card-text text-center">USB Key</h5>
      <div class="d-flex justify-content-center">
        <div class="btn-group">
        <a class="btn btn-sm btn-outline-secondary" href="./products.php">Buy</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col">
  <div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" id="image-3" width="100%" height="400">
    </svg>
    <div class="card-body">
      <h5 class="card-text text-center">Keychain</h5>
      <div class="d-flex justify-content-center">
        <div class="btn-group">
        <a class="btn btn-sm btn-outline-secondary" href="./products.php">Buy</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
    </div>
    <?php
    include './footer.html';
    ?>

<script>
let anim = document.getElementById("anim");
anim.addEventListener("click", function(){
  Swal.fire({
  icon: 'success',
  title: 'Thank you ! ',
  showConfirmButton: false,
  timer: 1500
})
});
</script>