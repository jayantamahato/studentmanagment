<?php
include'config.php';
$id=$_GET['id'];
$degree=$_POST['degree'];
$year=$_POST['year'];
$ins=$_POST['ins'];
$sql="INSERT INTO `qualification`(`degree`, `inst`, `year`, `fsid`) VALUES ('$degree','$ins','$year','$id')";
$run=mysqli_query($conn,$sql);
if($run=='1')
{
    echo "<script> alert('Added')</script>";
    echo"<script>window.open('../admin/degree.php','_self')</script>";
}
else{
    echo "<script> alert('update unsucessful')</script>";
    echo"<script>window.open('../admin/degree.php','_self')</script>";
}
?>