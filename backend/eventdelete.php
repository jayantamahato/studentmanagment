<?php
include'config.php';
$id=$_GET['id'];
$query ="DELETE FROM `event` WHERE eid='$id'";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('deleted!')</script>";
    echo"<script>window.open('../admin/adminview.php','_self') </script>";
}
else
{
    echo "<script> alert('unsucessful!')</script>";
    echo"<script>window.open('../admin/adminview.php','_self') </script>";
}
?>