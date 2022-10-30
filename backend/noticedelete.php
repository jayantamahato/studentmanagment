<?php
include'config.php';
$id=$_GET['id'];
$query ="DELETE FROM `notice` WHERE noticeid='$id'";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('deleted!')</script>";
    echo"<script>window.open('../admin/notice.php','_self') </script>";
}
else
{
    echo "<script> alert('unsucessful!')</script>";
    echo"<script>window.open('../admin/notice.php','_self') </script>";
}
?>