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

  <title>Our Team</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
       *{
           padding: 0;
           margin: 0;
           box-sizing: border-box;
           
       }
       .p1{
           font-size: 25px;
           font-weight: lighter;
           color:grey
       }
	   .section-title {
    padding-bottom: 40px;
    margin-top: 22px;
    padding: 16px;
}
img:hover {
    
    
    transition: .5s all ease-in-out;
	transform:scale(.9);
}

      </style>

</head>

<body>
<?php include('includes/navbar.php') ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Team Members</h2>
        <!--<p>Est </p>-->
      </div>
    </div><!-- End Breadcrumbs -->   


<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">
	 <div class="container text-center">       
              <p class="p1">"We craft learning journeys for every student that address their unique needs. We believe in the power of one-to-one learning that addresses every child's learning needs, allows students to be holistically involved in their education and be active, lifelong learners."</p>
              <hr>
			  </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <div class="col-lg-4" style="margin-left:83px;">
        <div class="member">
          <img src="assets/img/trainers/trainer-1.jpeg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Arvind Vishwakarma</h4>
            <span>Developer</span>
            <!--<p>
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
            </p>-->
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4" style="margin-left:132px;">
        <div class="member">
          <img src="assets/img/trainers/12.jpeg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Shrikant Dwivedi</h4>
            <span>UI/UX Designer</span>
            <!--<p>
              Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
            </p>-->
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Trainers Section -->

  
<?php include('includes/footer.php') ?>

<?php include('includes/js.php') ?>


</body>

</html>