<?php
include'config.php';
$id=$_GET['id'];
$scode=$_POST['scode'];
$sem=$_POST['sem'];
$ldate=$_POST['ldate'];
$validation=$_POST['validation'];

$query="UPDATE `assignment` SET`subcode`='$scode',`lastdate`='$ldate',`sem`='$sem',`validation`='$validation' WHERE `aid`='$id'";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('Assignment Edited!')</script>";
    echo"<script>window.open('../admin/assignment.php','_self') </script>";
}
else{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../admin/assignment.php','_self') </script>";
}
?>