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

  <title>About Us</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
</head>

<body>
<?php include('includes/navbar.php');
?>


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>We are trying to give a platform to all of you , where you can study ,and gain knowledge etc. <p>
      </div>
    </div><!-- End Breadcrumbs -->

     <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
  <?php include('functions.php') ?>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php userDetails() ?></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php studentUpload()  ?></span>
            <p>Total Notes </p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php notice()  ?></span>
            <p>Total Notice</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php teacherUpload()  ?></span>
            <p>Teachers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
<br>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about_new.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           <p>It is a portal available to all students of DCSA(Department of Computer Science and Application). The initiative launched on 23th SEPT, 2020 with the motive of making accessible each and every single piece of information pertaining to DHSGU on an online platform. Our ultimate aim lies in creating an online database on which each student can rely upon; and we strive to achieve this every single day. Providing unparalleled assistance to students in every branch continues to be our one biggest objective.
		   </P>
		   <h3>Working Ethics</h3>
          <p>Regardless of the department you’re in, we bring out the best in you. We’re not always working – we love to party too! Celebrating and reveling in each accomplishment is an important aspect of our work.</p>
		   
            <!--<a href="" class="learn-more-btn">Learn More</a>-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



   <!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/kanchan.jpg" class="testimonial-img" alt="">
              <h3>Kanchan Namdeo</h3>
              <h4>MCA Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A major initiative for students. Must say your hard work paid off.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/shivani.jpg" class="testimonial-img" alt="">
              <h3>Shivani Chourasiya </h3>
              <h4>MCA Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                it is good 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/shanshank.jpg" class="testimonial-img" alt="">
              <h3>Shashank Jain </h3>
              <h4>MCA Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                keepgrowing 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/shivamSeth.jpg" class="testimonial-img" alt="">
              <h3>Shivam Seth </h3>
              <h4>MCA Student</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                You guys are doing a great job and up to date with technologies. Very impressive. 
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
<?php include('includes/footer.php') ?>

<?php include('includes/js.php') ?>

</body>

</html>