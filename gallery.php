<?php
session_start();

if(isset($_SESSION['uid']))
{
     //echo "student";
}
if(isset($_SESSION['tid']))
{
     //echo "teacher";
}
else
{
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>  
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">
  <style>
    body {
    background-image: linear-gradient(to top, #ecedee 0%, #eceeef 75%, #e7e8e9 100%);
    min-height: 100vh;
    font: normal 16px sans-serif;
    /*padding: 60px 0;*/
}



.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    transform: rotate(4deg);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}
</style>
</head>

<body>

<?php include('includes/navbar.php') ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>GALLERY</h2>
        <p>Some Beautiful Pictures of our Department </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container gallery-container">
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="assets/img/gallery/1.jpeg">
                    <img src="assets/img/gallery/1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="assets/img/gallery/2.jpeg">
                    <img src="assets/img/gallery/2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/3.jpeg">
                    <img src="assets/img/gallery/3.jpg" alt="">
                </a>
            </div>
			<div class="col-sm-6 col-md-4">
      <a class="lightbox" href="assets/img/gallery/4.jpeg">
                    <img src="assets/img/gallery/4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="assets/img/gallery/5.jpeg">
                    <img src="assets/img/gallery/5.jpg" alt="">
            </div>
            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/6.jpeg">
                    <img src="assets/img/gallery/6.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/7.jpeg">
                    <img src="assets/img/gallery/7.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/8.jpeg">
                    <img src="assets/img/gallery/8.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/9.jpeg">
                    <img src="assets/img/gallery/9.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/10.jpeg">
                    <img src="assets/img/gallery/10.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/11.jpeg">
                    <img src="assets/img/gallery/11.jpg" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="assets/img/gallery/12.jpeg">
                    <img src="assets/img/gallery/12.jpg" alt="">
                </a>
            </div>   
        </div>
    </div>
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DCSA</h3>
            <p>
              Department of computer science and application,<br>
              Dr. Harisingh Gour University, Sagar<br><br>
              <strong>Phone:</strong> 8518871350<br>
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 9151485749 <br><br>
              <strong>Email:</strong> arvindvish2588@gmail.com ,<br>
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp shrikantdwivedi786@gmail.com
       
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Study Material</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">login</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="#">Register</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Notes </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Notices</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Previous Papers</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Enter your email here to join our updates regarding department and website.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          2020 ©All Rights Reserved.
        </div>
       
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
</script>

</body>

</html>