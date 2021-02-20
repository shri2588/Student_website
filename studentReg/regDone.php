<?php
session_start();

if(isset($_SESSION['uid']))
{
     header('location:../studentProfile/profile.php');
}
if(isset($_SESSION['tid']))
{
  header('location:../faculty/profile.php');
}
else
{
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <?php include('includes/boot.php') ?>
</head>
<body>
<?php include('includes/navbar.php') ?>
<div class="container">
<br>
<br>    
<br>


<?php 
include('../includes/dbcon.php');
$roll = $_POST['roll'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$degree = $_POST['degree'];
$sem = $_POST['sem'];
$password = $_POST['password'];  



$query = "INSERT INTO `users`(`roll_no`, `name`, `dob`, `email`, `contact`, `degree`, `sem`, `password`) VALUES ('$roll','$name',
'$dob','$email','$contact','$degree','$sem','$password')";
$run = mysqli_query($con,$query); 

if($run == true)
{
   ?>

<!-- section start -->
<section id="events" class="events">
<br>
<br>    
<br>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 align-items-stretch">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-success">Registration Successfully Done</h5>
                    <br>
                    <a href="../login.php"><button class="get-started-btn">Click to Login</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Events Section -->

   <?php
}
else
{
    ?>
<!-- section start -->
<section id="events" class="events">
<br>
<br>    
<br>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 align-items-stretch">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-danger">Registration Failed</h5>
                    <br>
                    <a href="../login.php"><button class="btn btn-warning">Try Again</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End Events Section -->

    
    

   <?php
}
?>
<?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>


</body>
</html>