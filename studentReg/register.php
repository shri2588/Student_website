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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<?php include('includes/navbar.php') ?>
<div class="container">
<br>
<br>    
<br>
<?php
include("../includes/dbcon.php");
$id = $_GET['id'];
$query = "SELECT * FROM `checkreg` WHERE `id`=$id";
$run = mysqli_query($con,$query); 
$row = mysqli_num_rows($run);
$data = mysqli_fetch_assoc($run);
?>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Student Registration</h4>
	<p class="text-center">Enter your correct details</p>
		<form action="regDone.php" method="post">

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><?php echo $data['roll_no'] ?></span>
					<input name="roll" class="form-control" value="<?php echo $data['roll_no']; ?>" type="text" hidden>
				</div>
			</div> <!-- form-group// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i></span>
				</div>
				<input name="name" class="form-control" placeholder="Full name" type="text" required>
			</div> <!-- form-group// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
				</div>
				<input name="email" class="form-control" placeholder="Email address" type="email" required>
			</div> <!-- form-group// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fas fa-table"></i> </span>
				</div>
				<input name="dob" class="form-control" placeholder="Date of Birth (dd/mm/yyyy)" type="date" required>
			</div> <!-- form-group// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
				</div>
				<input name="contact" class="form-control" placeholder="Contact number" type="text" required>
			</div> <!-- form-group// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
				</div>
				<select name="degree" class="form-control" required>
					<option selected=""> Select Degree</option>
					<option value="MCA">Master in Computer Application (MCA)</option>
					<option value="BCA">Bachlor in Computer Application (BCA)</option>
				</select>
			</div> <!-- form-group end.// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-book"></i> </span>
				</div>
				<select class="form-control" name="sem" required>
					<option selected=""> Select Semester</option>
					<option value="I">Ist Semester</option>
					<option value="II">IInd Semester</option>
					<option value="III">IIIrd Semester</option>
					<option value="IV">IVth Semester</option>
					<option value="V">Vth Semester</option>
					<option value="VI">VIth Semester</option>
				</select>
			</div> <!-- form-group end.// -->

			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				</div>
				<input class="form-control" name ="password" placeholder="Create password" type="password" required>
			</div> <!-- form-group// -->
                                    
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block" name="submit"> Register <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></button>
			</div> <!-- form-group// -->                                                                     
		</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>
</body>
</html>