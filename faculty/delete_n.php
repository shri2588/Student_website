<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Notice</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php


session_start();

include('dbcon.php');
$delId = $_GET['delId'];
$tid = $_SESSION['tid'];

$query = "DELETE FROM `notice` WHERE `id`='$delId' AND `tid`='$tid'";
$run = mysqli_query($con,$query);

if($run == true)
{
    ?>

<script>
    //alert('Deleted Successfully');
    //window.open('admin.php','_self');
            swal({
                title: "Deleted Successfully..",
                text: "Click ok!!!",
                icon: "success",
                }).then(function() {
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
        //window.open('admin.php','_self');
            swal({
                title: "Error in deleting!!!",
                text: "Click ok for try again!!!",
                icon: "error",
                }).then(function() {
                    window.location = "profile.php";
                });
    </script>
    
    <?php
}

?>
</body>
</html>

