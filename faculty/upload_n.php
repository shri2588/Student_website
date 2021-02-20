<?php
session_start();

if(isset($_SESSION['uid']))
{
     header('location:../studentProfile/profile.php');
}
if(isset($_SESSION['tid']))
{
  
}
else
{
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Notice</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include('../includes/dbcon.php');

if(isset($_POST['submit']))
{
    $tid = $_SESSION['tid'];
    $query = "SELECT * FROM `faculty` WHERE `id`=$tid";
    $run = mysqli_query($con,$query);
    $data = mysqli_fetch_assoc($run);
    $title = $_POST['title'];
    $name = $data['name'];
    $fid = $data['fid'];
    $ufor = $_POST['ufor'];
    $date = date("d/m/Y");
    date_default_timezone_set("Asia/Calcutta");
    $time = date("h:i:s a");
    
    $imagename = $_FILES['file'] ['name'];
            $tempimgname = $_FILES['file'] ['tmp_name'];
            move_uploaded_file($tempimgname,"upload_n/$imagename");
            $sql = "INSERT INTO `notice`(`title`, `file`, `name`, `date`, `time`, `fid`, `for`, `tid`) VALUES ('$title','$imagename','$name','$date','$time','$fid','$ufor','$tid')";
            
            $run = mysqli_query($con, $sql);

            if($run == true)
            {
                ?>
            
            <script>
                //document.getElementById("msg").innerHTML="<span class='text-success'>Upload Successfull</span>";
                //alert('Successfully Uploaded');
                //window.open('profile.php','_self');
                swal({
                title: "Upload Successfully..",
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
                        title: "Error in uploading!!!",
                        text: "Click ok for try again!!!",
                        icon: "error",
                        }).then(function() {
                            window.location = "profile.php";
                        });
                </script>
                
                <?php
            }
    
    
    
}

?>
</body>
</html>

