<?php
session_start();

if(isset($_SESSION['uid']))
{

}
elseif(isset($_SESSION['tid']))
{
    header('location:../faculty/profile.php');
}
else
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Student's Profile</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
</head>

<body>

  <?php include('includes/navbar.php') ?>
  <?php 

include('../includes/dbcon.php');
$uid = $_SESSION['uid'];
$query = "SELECT * FROM `users` WHERE `id`= $uid";
$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);
$data = mysqli_fetch_assoc($run);


?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Welcome</h2>
        <p><?php echo $data['name']; ?> (<?php echo $data['roll_no']; ?>)</p>
      </div>
    </div><!-- End Breadcrumbs -->
<br>
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Student's Detail</h5>
                
                <table class="table">
                    <tbody>
                    <tr>
                        <td class="font-weight-bold">Roll No :</td>
                        <td><?php echo $data['roll_no'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Name :</td>
                        <td><?php echo $data['name'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">DOB :</td>
                        <td><?php echo $data['dob'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Email :</td>
                        <td><?php echo $data['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Contact :</td>
                        <td><?php echo $data['contact'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Degree :</td>
                        <td><?php echo $data['degree'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold">Semester :</td>
                        <td><?php echo $data['sem'] ?> Semester</td>
                    </tr>
                    <tr>
                        <th class="text-info" colspan="2"><a href="edit.php" class="get-started-btn">Edit</a></th>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Upload</h5>
                <form action="upload.php" method="post"  enctype="multipart/form-data">
                  <div class="form-group file">
                      <label for="file"><h5>Choose Pdf:</h5></label>
                      <input type="file" class="form-control" name="file">
                  </div>
                  <br>
                  <div class="form-group">
                      <label for="title"><h5>Title: <span style="color:red">*</span></h5></label>
                      <input type="text" class="form-control" name="title" placeholder="Enter Title" required="required">
                  </div>
                  <div class="form-group">
                      <input type="submit" class="get-started-btn" name="submit" value="Upload"> 
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Events Section -->




<?php
 $uid = $_SESSION['uid'];
 include('../includes/dbcon.php');
$qry = "SELECT * FROM `upload` WHERE `uid`=$uid ORDER BY `id` DESC";
$runQ = mysqli_query($con,$qry);

?>





<!-- Table section -->

    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Your Uploads</h5>
                            
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Date & Time of uploading</th>
                                        <th>Download</th>
                                        <th>Delete</th>
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
                                              <td><a href="upload/<?php echo $data['file'] ?>" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-download"></i></a></td>
                                              <td><a href="delete.php?delId=<?php echo $data['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
                                      <?php
                                  }

                                  ?>
                              </tbody>
                            </table>
                        </div>          
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section><!-- End Table Section -->



  </main><!-- End #main -->

  <?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>

</body>

</html>