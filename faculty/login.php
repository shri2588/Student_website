<?php
session_start();

if(isset($_SESSION['uid']))
{
    header('../studentProfile/profile.php');

}
elseif(isset($_SESSION['tid']))
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
  <title>Faculty Login</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <?php include('includes/boot.php') ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<?php include("includes/navbar.php")?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Faculty Login</h2>
    <!--<p>Est </p>-->
  </div>
</div><!-- End Breadcrumbs -->


<div class="container">
<br><br><br> 

<div class="row">
<aside class="col-sm-4">
</aside> <!-- col.// -->

<aside class="col-sm-4">
  <div class="card">
    <article class="card-body">

      <p class="text-success text-center text-info">Login with your given Username and password</p>
      <form action="login.php" method="POST">
      <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name="fid" class="form-control" placeholder="Enter your username" type="text">
      </div> <!-- input-group.// -->
      </div> <!-- form-group// -->
      <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
          <input name="password" class="form-control" placeholder="******" type="password">
      </div> <!-- input-group.// -->
      </div> <!-- form-group// -->
      <div class="form-group"> 
        <div class="checkbox">
          <label> <input type="checkbox"> Remember password </label>
        </div> <!-- checkbox .// -->
        </div> <!-- form-group// -->  
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
      </div> <!-- form-group// -->
      <!--<p class="text-center"><a href="" class="text-danger">Forgot password?</a> or <a href="">Register Here</a></p>
--></form>
    </article>
</div> <!-- card.// -->
</aside> <!-- col.// -->

<aside class="col-sm-4">
</aside> <!-- col.// -->
</div> <!-- row.// -->
</div> 
<!--container end.//-->
<br><br><br>

</main><!-- End #main -->

<?php include('includes/footer.php') ?>

<?php include('includes/js.php') ?>

</body>
</html>


<?php

include('../includes/dbcon.php');

if(isset($_POST['submit']))
{
    $fid = $_POST['fid']; 
    $password = $_POST['password'];
    
    $query = "SELECT * FROM `faculty` WHERE `fid` = '$fid' AND `password` = '$password'";
    
    $run = mysqli_query($con,$query); 
    $row = mysqli_num_rows($run);
    if($row<1)
        {
            ?>
            <script>
                //alert('Wrong!!!');
                window.open('wrong.php','_self');
            </script>
            <?php
        }
    else
        {
            $data = mysqli_fetch_assoc($run);
                $id = $data['id'];
                
                #echo "id =" .$id;
                
                session_start();
                
                $_SESSION['tid'] = $id;
                #header('location:admin.php');  
                ?>
                <script>
                    window.open('profile.php','_self');
                </script>
                <?php     
        }
}

?>