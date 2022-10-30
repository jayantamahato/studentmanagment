<?php
include'config.php';
$title=$_POST['title'];
$topic=$_POST['topic'];
$id=(rand(10,9999));
$query="INSERT INTO `event`(`eid`,`title`, `topic`)VALUES('$id','$title','$topic')";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('event published!')</script>";
    echo"<script>window.open('../admin/event.php','_self') </script>";
}
else{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../admin/event.php','_self') </script>";
}
?>