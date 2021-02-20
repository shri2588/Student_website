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

  <title>Contact Us</title>
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
        <h2>Contact Us</h2>
        <p>Contact us anytime and if you want to give any feedback or suggestion fill the form and send, we will contact you as soon as possible.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">

      <!--
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.7444694199094!2d78.77038071476825!3d23.82768399173698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3978d1603029a349%3A0x1f99027de1076b62!2sDepartment%20of%20Computer%20Science%20and%20Applications!5e0!3m2!1sen!2sin!4v1603016009014!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      -->

        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.7444694199094!2d78.77038071476825!3d23.82768399173698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3978d1603029a349%3A0x1f99027de1076b62!2sDepartment%20of%20Computer%20Science%20and%20Applications!5e0!3m2!1sen!2sin!4v1603016009014!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Department of computer science and application,
          Dr. Harisingh Gour University, Sagar (M.P.) 470001</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>arvindvish2588@gmail.com<br>
                   shrikantdwivedi786@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91- 8518871350<br>
                   +91- 9151485749</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="mail/mail.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="contact" id="subject" placeholder="Your Contact" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include('includes/footer.php') ?>

<?php include('includes/js.php') ?>

</body>

</html>