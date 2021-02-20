<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
session_start();

if(isset($_SESSION['uid']))
{

}
if(isset($_SESSION['tid']))
{
  header('location:../faculty/profile.php');
}
else
{
    
}
?>
<?php
include('../includes/dbcon.php');

if(isset($_POST['submit']))
{
    $uid = $_SESSION['uid'];
    $query = "SELECT * FROM `users` WHERE `id`=$uid";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);

    $title = $_POST['title'];
    $roll = $data['roll_no'];
    $name = $data['name'];
    $email = $data['email'];
    $contact = $data['contact'];
    $degree = $data['degree'];
    $sem = $data['sem'];
    $uid = $data['id'];
    $date = date("d/m/Y");
    date_default_timezone_set("Asia/Calcutta");
    $time = date("h:i:s a");
            $imagename = $_FILES['file'] ['name'];
            $tempimgname = $_FILES['file'] ['tmp_name'];
            move_uploaded_file($tempimgname,"upload/$imagename");
            $sql = "INSERT INTO `upload`(`title`, `file`, `roll_no`, `name`, `email`, `contact`, `degree`, `sem`, `uid`, `date`, `time`) VALUES ('$title','$imagename',
            '$roll','$name','$email','$contact','$degree','$sem','$uid','$date','$time')";
            
            $run = mysqli_query($con, $sql);

            if($run == true)
            {
                ?>
            
            <script>
                //document.getElementById("msg").innerHTML="<span class='text-success'>Upload Successfull</span>";
                //alert('Successfully Uploaded');
                //window.open('profile.php','_self');

                swal({
                title: "Your File is uploaded.",
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
                    //document.getElementById("msg").innerHTML="<span class='text-danger'>Error!!! Please try again</span>";
                    //alert('Error!!! Please try again');
                    //window.open('profile.php','_self');
                    swal({
                            title: "Error in uploading!!!.",
                            text: "Click ok for try again!!!",
                            icon: "error",
                        }).then(function()
                        {
                            window.location = "profile.php";
                        });
                </script>
                
                <?php
            }
}

?>
</body>
</html>

