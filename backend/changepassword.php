<?php
include'config.php';
$id=$_GET['id'];
$pass=$_POST['password'];
$sql="UPDATE`students`SET`password`='$pass' WHERE `studentid`='$id'";
$run=mysqli_query($conn,$sql);
if($run=='1')
{
    echo "<script> alert('password changed!')</script>";
    echo"<script>window.open('../pages/studentdash.php','_self') </script>";
}
else
{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../pages/studentdash.php','_self') </script>";
}

?>