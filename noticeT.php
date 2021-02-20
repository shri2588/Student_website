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
  <title>Teacher's Corner</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
</head>

<body>

  <?php include('includes/navbar.php') ?>
  <?php
include('includes/dbcon.php');
$qry = "SELECT * FROM `upload_t` ORDER BY `id` DESC";
$runQ = mysqli_query($con,$qry);

?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Uploads By Teachers</h2>
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
        <th>Title</th>
        <th>Date & Time of uploading</th>
        <th>Uploader</th>
        <th>For</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
        <?php

        while($data = mysqli_fetch_assoc($runQ))
        {
            ?>
                <tr>
                    <td><?php echo $data['title'] ?></td>
                    <td><?php echo $data['date'] ?> (<?php echo $data['time'] ?>)</td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['ufor'] ?></td>
                    <td><a href="faculty/upload_t/<?php echo $data['file'] ?>" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-download"></i></a></td>
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