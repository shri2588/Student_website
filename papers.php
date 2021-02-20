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
  <title>Previous Exam Papers</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
</head>

<body>

  <?php include('includes/navbar.php') ?>
<?php
include('includes/dbcon.php');
$qry = "SELECT * FROM `upload` ORDER BY `id` DESC";
$runQ = mysqli_query($con,$qry);
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Previous Exam Papers</h2>
        <!--<p>Est </p>-->
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                <table class="table table-hover table-responsive-sm">
    <thead>
      <tr>
        <th>Subject Code</th>
        <th>Subject Name</th>
        <th>Degree/Semester</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_SESSION['uid']))
    {
      ?>

      <!-- Ist Semester -->
        <tr>
            <td>CSA-CC-121</td>
            <td>Information Technology</td>
            <td>MCA (Ist Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/1/Isem IT.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-122</td>
            <td>Digital System Design</td>
            <td>MCA (Ist Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/1/Isem DSD.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-123</td>
            <td>Programming and Problem Solving using C</td>
            <td>MCA (Ist Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/1/ISem c language.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-SE-124</td>
            <td>Pofessional Communication</td>
            <td>MCA (Ist Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/1/Isem communication.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-125</td>
            <td>Discrete Mathematics</td>
            <td>MCA (Ist Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/1/Isem discrete.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

         <!-- IIst Semester -->
        
         <tr>
            <td>CSA-CC-221</td>
            <td>Computer Architecture</td>
            <td>MCA (IIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/2/IIsem architecture.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-222</td>
            <td>Data Structure</td>
            <td>MCA (IIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/2/IIsem data structure.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-223</td>
            <td>Object Oriented Programming Using
            C++</td>
            <td>MCA (IIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/2/IIsem c++.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-224</td>
            <td>Operating System</td>
            <td>MCA (IIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/2/IIsem operating system.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-SE-225</td>
            <td>Organization Behaviour</td>
            <td>MCA (IIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/2/IIsem organisation behaviour.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>FSC-OE-221</td>
            <td>Computer Forensics and
            Cyber Security</td>
            <td>MCA (IIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/2/IIsem forensics.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>
        
         <!-- IIIst Semester -->

         <tr>
            <td>CSA-CC-321</td>
            <td>Computer Organization, Data Communication Network</td>
            <td>MCA (IIIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/3/IIIsem network.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>SA-CC-322</td>
            <td>Database Management System</td>
            <td>MCA (IIIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/3/IIIsem database.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-323</td>
            <td>Java Programming</td>
            <td>MCA (IIIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/3/IIIsem java.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-324</td>
            <td>Design and Analysis of Algorithm</td>
            <td>MCA (IIIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/3/IIIsem algorithms.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>CSA-CC-325</td>
            <td>Probability, Statistics and Combinatories</td>
            <td>MCA (IIIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/3/IIIsem probability.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>

        <tr>
            <td>HIS-OE-328</td>
            <td>Dr. Hari Singh Gour: Life Contribution
            and ldeology</td>
            <td>MCA (IIIst Semester)</td>
            <td><a class="btn btn-success btn-sm" href="assets/papers/mca/3/IIIsem Harisingh Gaur.pdf" target="_blank"><i class="fas fa-download"></i></a></td>
        </tr>


      <?php
    }
    elseif(isset($_SESSION['tid']))
    {
      ?>
    <tr>
                    <td>sdfs</td>
                    <td>sdfs</td>
                    <td>sdfs</td>
                    <td>sdfs</td>
                </tr>
      <?php
    }
    else
    {
      ?>
      <tr>
      <td class="text-danger"><strong>First Login as student/faculty to download previous exam papers</strong><a href="login.php" class="get-started-btn">Login</a></td>
      </tr>
        
      <?php
    }
    ?>
    

                
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>

</body>

</html>