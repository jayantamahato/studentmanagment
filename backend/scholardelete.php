<?php
include'config.php';
$id=$_GET['id'];
$query ="DELETE FROM `phd` WHERE scid='$id'";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('deleted!')</script>";
    echo"<script>window.open('../admin/scholars.php','_self') </script>";
}
else
{
    echo "<script> alert('unsucessful!')</script>";
    echo"<script>window.open('../admin/scholars.php','_self') </script>";
}
?>