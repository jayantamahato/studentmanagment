<?php
include'config.php';
$id=$_GET['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$doa=$_POST['doa'];
$query= "UPDATE `phd` SET `fname`='$fname',`lname`='$lname',`doa`='$doa' WHERE `scid`='$id'";
  $run=mysqli_query($conn,$query);
  if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
        echo"<script>window.open('../admin/scholars.php','_self')</script>";
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       echo"<script>window.open('../admin/adminview.php','_self')</script>";
    }

?>