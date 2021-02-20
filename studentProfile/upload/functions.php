<?php

function userDetails() 
{
  include('includes/dbcon.php');
  $qry = "SELECT * FROM `users`";
  $run = mysqli_query($con,$qry);
  $data = mysqli_fetch_assoc($run);
  $rowsUser = mysqli_num_rows($run);
  echo $rowsUser;
}
  

function facultyDetails() 
{
  include('includes/dbcon.php');
  $qry = "SELECT * FROM `faculty`";
  $run = mysqli_query($con,$qry);
  $data = mysqli_fetch_assoc($run);
  $rowsFaculty = mysqli_num_rows($run);
  echo $rowsFaculty;
}

function notice() 
{
  include('includes/dbcon.php');
  $qry = "SELECT * FROM `notice`";
  $run = mysqli_query($con,$qry);
  $data = mysqli_fetch_assoc($run);
  $rowsNotice = mysqli_num_rows($run);
  echo $rowsNotice;
}

function studentUpload() 
{
  include('includes/dbcon.php');
  $qry = "SELECT * FROM `upload`";
  $run = mysqli_query($con,$qry);
  $data = mysqli_fetch_assoc($run);
  $rowsStudentUpload = mysqli_num_rows($run);
  echo $rowsStudentUpload;
}

function teacherUpload() 
{
  include('includes/dbcon.php');
  $qry = "SELECT * FROM `upload_t`";
  $run = mysqli_query($con,$qry);
  $data = mysqli_fetch_assoc($run);
  $rowsTeachersUpload = mysqli_num_rows($run);
  echo $rowsTeachersUpload;
}
?>
