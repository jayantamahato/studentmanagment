<?php
 session_start();
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 include'config.php';
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $doa=$_POST['doa'];
 $id=(rand(1,999));
 $sql="INSERT INTO `phd`(`fname`,`lname`, `doa`,`scid`) VALUES ('$fname','$lname','$doa','$id')";
 $run=mysqli_query($conn,$sql);
 if($run=='1')
 {
    echo "<script> alert('scholar added!')</script>";
    echo"<script>window.open('../admin/scholars.php','_self') </script>";
 }
 else
 {
    echo "<script> alert('Error!')</script>";
    echo"<script>window.open('../admin/addscholars.php','_self') </script>";
 }
?>