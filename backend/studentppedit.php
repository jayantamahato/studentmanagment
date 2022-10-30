<?php
 session_start();
 include'config.php';
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 $id=$_GET['id'];
 $pic=$_FILES["pic"]["name"];
$pictempname=$_FILES["pic"]["tmp_name"];
$folder = "../css/img/std/".$pic;
move_uploaded_file($pictempname,$folder);
$query= "UPDATE `students` SET `pp`='$folder' WHERE `studentid`='$id'";
$run=mysqli_query($conn,$query);
if($run==1)
  {
    echo "<script> alert('update sucessful')</script>";
    echo"<script>window.open('../admin/students.php','_self')</script>";
  }
  else{
    echo "<script> alert('update unsucessful')</script>";
    echo"<script>window.open('../admin/adminview.php','_self')</script>";
  }
?>