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
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>List</title>
</head>
<body>
<?php
include('includes/dbcon.php');
$qry = "SELECT * FROM `users` ORDER BY `id` DESC";
$run = mysqli_query($con,$qry);

?>



<table border="1">
<?php
while($data = mysqli_fetch_assoc($run))
{
  ?>
<tr>
<td><?php echo $data['roll_no']; ?></td>
<td><?php echo $data['name']; ?></td>
<td><?php echo $data['dob']; ?></td>
<td><?php echo $data['email']; ?></td>
<td><?php echo $data['degree']; ?></td>
<td><?php echo $data['sem']; ?></td>

</tr>
  
  <?php
}
?>

</table>

</body>
</html>