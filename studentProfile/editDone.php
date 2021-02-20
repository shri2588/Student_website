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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Done</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php
include('../includes/dbcon.php');
$uid = $_SESSION['uid'];
$roll = $_POST['roll'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$degree = $_POST['degree'];
$sem = $_POST['sem'];





$query = "UPDATE `users` SET `name`='$name',`dob`='$dob',`email`='$email',`contact`='$contact',`degree`='$degree',`sem`='$sem' WHERE `id`= $uid";
$run = mysqli_query($con,$query); 

if($run == true)
{
    ?>
            <script>
                //alert('Update done successfully...');
                //window.open('profile.php','_self');
                swal({
                        title: "Edit Successfully.",
                        text: "Click ok!!!",
                        icon: "success",
                    }).then(function()
                    {
                        window.location = "profile.php";
                    });
            </script>
            <?php
}
else
{
   
    ?>
            <script>
                //alert('Error!!! Please try again.');
                //window.open('edit.php','_self');
                swal({
                        title: "Error in editing!!!",
                        text: "Click ok for try again!!!",
                        icon: "error",
                    }).then(function()
                    {
                        window.location = "edit.php";
                    });
            </script>
            <?php
}
?> 


</body>
</html>