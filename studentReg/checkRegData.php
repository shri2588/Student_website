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
        <h2>Check Your Details</h2>
        <!--<p>Est </p>-->
      </div>
    </div><!-- End Breadcrumbs -->
    <br>
    <br>
    <br>
    <?php
include('../includes/dbcon.php');
$roll = strtoupper($_POST['roll']);

$query_new = "SELECT * FROM `users` WHERE `roll_no`='$roll'";
$run_new = mysqli_query($con,$query_new); 
$data_new = mysqli_fetch_assoc($run_new);


$query = "SELECT * FROM `checkreg` WHERE `roll_no`='$roll'";
$run = mysqli_query($con,$query); 
$data = mysqli_fetch_assoc($run);

$id = $data['id'];
$name = $data['name'];
$dob = $data['dob'];


if($data_new['roll_no']==$roll)
{
    ?>   
    <!-- section start -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-12 align-items-stretch">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title text-danger">You were already registered!!!</h5>
                    <br>
                    <a href=""><button class="btn btn-primary btn-sm">Login <span><i class="fa fa-repeat" aria-hidden="true"></i></span></button></a>
                        <a href=""><button class="btn btn-info btn-sm">Forget Password <span><i class="fa fa-home" aria-hidden="true"></i></span></button></a>
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
    if($data['roll_no']==$roll)
    {
            ?>
    <!-- section start -->
        <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-md-12 align-items-stretch">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-success">As per our Record</h5>
                        <p class="font-weight-bold">Roll No: <?php echo $roll ?></p>
                        <p class="font-weight-bold">Name: <?php echo $name ?></p>
                        <p class="font-weight-bold">Dob: <?php echo $dob ?></p>
                        <a href="register.php?id=<?php echo $id?>"><button class="btn btn-success btn-sm">Correct <span><i class="fa fa-check" aria-hidden="true"></i></span></button></a>
                            <a href="index.php"><button class="btn btn-danger btn-sm">Incorrect <span><i class="fa fa-times" aria-hidden="true"></i></span></button></a>
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
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-md-12 align-items-stretch">
                <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title text-danger">Your roll Number doesn't match with our record...</h5>
                        <a href="index.php"><button class="btn btn-warning">Try Again <span><i class="fa fa-repeat" aria-hidden="true"></i></span></button></a>
                </div>
                </div>

            </div>
            </div>

        </div>
        </section>
    <!-- End Events Section -->
       
            <?php
    }
}

       
?>


  </main><!-- End #main -->
<br>
<br>
<br>
  <?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>

</body>

</html>