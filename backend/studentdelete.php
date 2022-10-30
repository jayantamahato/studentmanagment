<?php
include'config.php';
$id=$_GET['id'];
$query ="DELETE FROM `students` WHERE `studentid`='$id'";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('deleted!')</script>";
    echo"<script>window.open('../admin/students.php','_self') </script>";
}
else
{
    echo "<script> alert('unsucessful!')</script>";
    echo"<script>window.open('../admin/students.php','_self') </script>";
}
?>