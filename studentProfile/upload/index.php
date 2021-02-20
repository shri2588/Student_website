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
  <title>Department of Computer Science and Application</title>
  <meta content="The Department of Computer Science and Applications was established in the academic year 1996-97 with a programme DCA (Diploma in Computer Applications) and BCA (Bachelor in Computer Applications).

In 1998, with the approval of the All India Council of Technical Education (AICTE), the MCA (Master of Computer Applications) programme was started with an intake of 30 students. Initially, the start of these programmes was in a small building near to the university bank and later in 1999, the department has got its own new building with well equipped laboratories, a library, a seminar hall, faculty rooms and lecture halls.

The first batch of MCA students was passed out in 2001 and most of them have been absorbed in the reputed IT, software based companies. Many BCA students of those years have also got jobs immediately after completion of their course. The Ph. D. program started in 2005. Till Jun 2017, more than 1250 students have been obtained their BCA, MCA and Ph.D. Degrees and many of them are now wellplaced. Department offers extension services to other departments of the university and conducts training programs for officers/ employees. Almost all research scholars who obtained Ph.D. degree from this department are employed in government universities, central schools and private engineering colleges as teaching faculties. Department organize workshops for students for increasing their awareness & skill in areas not coverdin syllabus." name="descriptison">
  <meta content="dcsaportal" name="keywords">
  <?php include('includes/boot.php') ?>
</head>

<body>
<?php include('includes/navbar.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Study Point <br>Find your study material</h1>
      <h2>Download and read the pdf, books and gain knowledge</h2>
      <a href="studentReg/index.php" class="btn-get-started">Register</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about_new.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           <p>It is a portal available to all students of DCSA(Department of Computer Science and Application). The initiative launched on 23th SEPT, 2020 with the motive of making accessible each and every single piece of information pertaining to DHSGU on an online platform. Our ultimate aim lies in creating an online database on which each student can rely upon; and we strive to achieve this every single day. Providing unparalleled assistance to students in every branch continues to be our one biggest objective.
		   </P>
		   <h3>Working Ethics</h3>
          <p>Regardless of the department you’re in, we bring out the best in you. We’re not always working – we love to party too! Celebrating and reveling in each accomplishment is an important aspect of our work.</p>
		   
            <a href="http://www.dhsgsu.ac.in/" class="learn-more-btn" target="_blank">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

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
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Our University</h3>
              <p>
                Dr. Hari Singh Gour University, formerly and more popularly known as Sagar University or University of Saugor, is a Central University in the city of Sagar, the state of Madhya Pradesh or, India. It was formerly named "Sagar University" when founded on 18 July 1946, during the British Raj
              </p>
              <div class="text-center">
                <a href="" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Notes</h4>
                    <p>Find out any notes and pdf of any semester, You can get study material and Books refrences</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Exam papers</h4>
                    <p>Find the previous year examintaion papers for all semester. Also you got the idea about exam patterns</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Notices</h4>
                    <p>Check out the latest news and updates about the all activites of our university</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->
   
          </div>
        </div>

      </div>
    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>How its work</h2>
          <p>How Its Work</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- extra space   -->
                </div>
                <h3><a href="">Upload Notes</a></h3>
                <p>Upload the study material whatever it is like notes, syllabus etc in pdf form.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- extra space   -->
                </div>
                <h3><a href="">Download Study Material</a></h3>
                <p>Download any docs or pdfs of any degree or semester which is uploaded by you students.</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <!-- extra space   -->
              </div>

              <h3><a href="">Help Each Others</a></h3>
              <p>Help each others by share the study material which is helpful for other students.</p>
            </div>
          </div>
        </div> <!-- End Course Item-->
        </div>
      </div>
    </section><!-- End Popular Courses Section -->

<!-- ======= Trainers Section ======= -->

<!--<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Team</h2>
      <p>Our Team Members</p>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="assets/img/trainers/trainer-1.jpeg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Arvind Vishwakarma</h4>
            <span>Developer</span>
            <p>
              Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
            </p>
            <div class="social">
              <a href="https://twitter.com/arvindvish2588" target=_blank><i class="icofont-twitter"></i></a>
              <a href="https://facebook.com/arvindgolu" target=_blank><i class="icofont-facebook"></i></a>
              <a href="https://instagram.com/arvind_vish" target=_blank><i class="icofont-instagram"></i></a>
              <a href="https://www.linkedin.com/in/arvind-vishwakarma-573193181/" target=_blank><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="assets/img/trainers/12.jpeg" class="img-fluid" alt="">
          <div class="member-content">
            <h4>Shrikant Dwivedi</h4>
            <span>UI/UX Designer</span>
            <p>
              Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
            </p>
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
</section> End Trainers Section -->

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