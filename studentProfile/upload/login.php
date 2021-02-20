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
  <title>Login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
</head>

<body>

  <?php include('includes/navbar.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Login</h2>
        <!--<p>Est </p>-->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/slogin.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="studentProfile/login.php">Student Login</a></h5>
                <p></p>
                <!--<p class="font-italic text-center">Sunday, September 26th at 7:00 pm</p>-->
                <p class="card-text">Login as a student you can able to upload study material in the formate of pdf, jpg, png, ppt, dox, etc. and view your upload in the study material section in menu (Notes/Pdf).</p>
                <a href="studentProfile/login.php" class="get-started-btn">Student Login</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/flogin.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="faculty/login.php">Faculty Login</a></h5>
                <!--<p class="font-italic text-center">Sunday, November 15th at 7:00 pm</p>-->
                <p class="card-text">Login as a faculty you can able to upload study material to the students and also notices in the formate of pdf, jpg, png, ppt, dox, etc. and view your upload in the study material section in menu (Teacher's Corner).</p>\
                <a href="faculty/login.php" class="get-started-btn">Faculty Login</a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>

</body>

</html>