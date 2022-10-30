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

$query= "UPDATE `assignmentans` SET `status`='verified',`validation`='invalid' WHERE `ansid`='$id'";
$run=mysqli_query($conn,$query);
if($run==1)
  {
    echo "<script> alert('Assignment Verified')</script>";
    echo"<script>window.open('../admin/assignmentans.php','_self')</script>";
  }
  else{
    echo "<script> alert('update unsucessful')</script>";
    echo"<script>window.open('../admin/assignmentans.php','_self')</script>";
  }
?>