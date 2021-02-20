<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start();

include('../includes/dbcon.php');
$delId = $_GET['delId'];
$uid = $_SESSION['uid'];

$query = "DELETE FROM `upload` WHERE `id`='$delId' AND `uid`='$uid'";
$run = mysqli_query($con,$query);

if($run == true)
{
    ?>

<script>
    //alert('Deleted Successfully');
    //window.open('profile.php','_self');

    swal({
            title: "Your File is deleted.",
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
        //alert('Error!!! Please try again');
        //window.open('profile.php','_self');
        swal({
            title: "Error in deleting.",
            text: "Click ok for try again!!!",
            icon: "error",
        }).then(function()
        {
            window.location = "profile.php";
        });
    </script>
    
    <?php
}


?>
</body>
</html>
