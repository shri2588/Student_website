<?php
session_start();

if(isset($_SESSION['uid']))
{
     header('location:../studentProfile/login.php');
}
if(isset($_SESSION['tid']))
{
  header('location:profile.php');
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
  <title>Student Login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>

  <?php include('includes/navbar.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Student Login</h2>
        <!--<p>Est </p>-->
      </div>
    </div><!-- End Breadcrumbs -->

<br><br><br>


<!-- section start -->
<section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 align-items-stretch">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-danger">Roll no and password don't match!!!!  </h5>
                    <a href="login.php"><button class="btn btn-warning btn-sm">Try Again <span><i class="fa fa-repeat" aria-hidden="true"></i></span></button></a>                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Events Section -->


<br><br><br>

  </main><!-- End #main -->

  <?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>

</body>

</html>

<?php include("../includes/footer.php")?>   
</body>
</html>
