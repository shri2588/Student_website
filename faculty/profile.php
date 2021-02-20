<?php
session_start();

if(isset($_SESSION['uid']))
{
    header('location:../studentProfile/profile.php');
}
elseif(isset($_SESSION['tid']))
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
$tid = $_SESSION['tid'];
$query = "SELECT * FROM `faculty` WHERE `id`= $tid";
$run = mysqli_query($con,$query);
$row = mysqli_num_rows($run);
$data = mysqli_fetch_assoc($run);


?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Welcome</h2>
        <p><?php echo $data['name']; ?> (<?php echo $data['type']; ?>)</p>
      </div>
    </div><!-- End Breadcrumbs -->
<br>
<!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Uploads</h5>
                        <form action="upload_t.php" method="post"  enctype="multipart/form-data">
                        <div class="form-group file">
                            <label for="file"><h5>Choose Pdf:</h5></label>
                            <input type="file" class="form-control" name="file" class="hide_file">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title"><h5>Title: <span style="color:red">*</span></h5></label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" required="required">
                        </div>

                        <div class="form-group">
                        <label for="ufor">Notice For: <span style="color:red;">*</span></label>
                        <select name="ufor" class="form-control">
                            <option value="All Students"I>All Students</option>
                            <option value="MCA I"I>MCA I Sem</option>
                            <option value="MCA II">MCA II Sem</option>
                            <option value="MCA III">MCA III Sem</option>
                            <option value="MCA IV">MCA IV Sem</option>
                            <option value="MCA V">MCA V Sem</option>
                            <option value="MCA VI">MCA VI Sem</option>

                            <option value="BCA I"I>BCA I Sem</option>
                            <option value="BCA II">BCA II Sem</option>
                            <option value="BCA III">BCA III Sem</option>
                            <option value="BCA IV">BCA IV Sem</option>
                            <option value="BCA V">BCA V Sem</option>
                            <option value="BCA VI">BCA VI Sem</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="get-started-btn" name="submit" value="Upload"> 
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Notice</h5>
                        <form action="upload_n.php" method="post"  enctype="multipart/form-data">
                        <div class="form-group file">
                            <label for="file"><h5>Choose Pdf:</h5></label>
                            <input type="file" class="form-control" name="file" class="hide_file">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title"><h5>Title: <span style="color:red">*</span></h5></label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" required="required">
                        </div>
                        <div class="form-group">
                        <label for="ufor">Upload For: <span style="color:red;">*</span></label>
                        <select name="ufor" class="form-control">
                            <option value="All Students"I>All Students</option>
                            <option value="MCA I"I>MCA I Sem</option>
                            <option value="MCA II">MCA II Sem</option>
                            <option value="MCA III">MCA III Sem</option>
                            <option value="MCA IV">MCA IV Sem</option>
                            <option value="MCA V">MCA V Sem</option>
                            <option value="MCA VI">MCA VI Sem</option>

                            <option value="BCA I"I>BCA I Sem</option>
                            <option value="BCA II">BCA II Sem</option>
                            <option value="BCA III">BCA III Sem</option>
                            <option value="BCA IV">BCA IV Sem</option>
                            <option value="BCA V">BCA V Sem</option>
                            <option value="BCA VI">BCA VI Sem</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="get-started-btn" name="submit" value="Upload Notice"> 
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Events Section -->




    <?php
$tid = $_SESSION['tid'];
include('../includes/dbcon.php');
$qry = "SELECT * FROM `upload_t` WHERE `tid`=$tid ORDER BY `id` DESC";
$runQ = mysqli_query($con,$qry);
$row = mysqli_num_rows($runQ);

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <center><h3>Your Uploads</h3></center>
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Date & Time of uploading</th>
                    <th>Upload For</th>
                    <th>Download</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php

                    if($row>0)
                    {
                        while($data = mysqli_fetch_assoc($runQ))
                        {
                            ?>
                                <tr>
                                    <td><?php echo $data['title'] ?></td>
                                    <td><?php echo $data['date'] ?> (<?php echo $data['time'] ?>)</td>
                                    <td><?php echo $data['ufor'] ?></td>
                                    <td><a href="upload_t/<?php echo $data['file'] ?>" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-download"></i></a></td>
                                    <td><a  class="btn btn-danger btn-sm" href="delete_t.php?delId=<?php echo $data['id'] ?>"><i class="fas fa-trash-alt"></a></td>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                                <tr>
                                    <td colspan="4" class="text-danger">No Record Found</td>
                            <?php
                    }
                   

                    ?>
                </tbody>
            </table>
        </div>


<?php

$tid = $_SESSION['tid'];
include('../includes/dbcon.php');
$qry = "SELECT * FROM `notice` WHERE `tid`=$tid ORDER BY `id` DESC";
$runQ = mysqli_query($con,$qry);
$row = mysqli_num_rows($runQ);
?>
        <div class="col-md-6">
            <center><h3>Your Notices</h3></center>
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Date & Time of uploading</th>
                    <th>Upload For</th>
                    <th>Download</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php

                        if($row>0)
                        {
                            while($data = mysqli_fetch_assoc($runQ))
                            {
                                ?>
                                    <tr>
                                        <td><?php echo $data['title'] ?></td>
                                        <td><?php echo $data['date'] ?> (<?php echo $data['time'] ?>)</td>
                                        <td><?php echo $data['for'] ?></td>
                                        <td><a href="upload_n/<?php echo $data['file'] ?>" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-download"></i></a></td>
                                        <td><a  class="btn btn-danger btn-sm" href="delete_n.php?delId=<?php echo $data['id'] ?>"><i class="fas fa-trash-alt"></a></td>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                    <tr>
                                        <td colspan="4" class="text-danger">No Record Found</td>
                                <?php
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


  </main><!-- End #main -->

  <?php include('includes/footer.php') ?>

  <?php include('includes/js.php') ?>

</body>

</html>