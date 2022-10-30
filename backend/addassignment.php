<?php
include'config.php';
$scode=$_POST['scode'];
$sem=$_POST['sem'];
$ldate=$_POST['ldate'];
$status=$_POST['status'];
$validation=$_POST['validation'];
$file=$_FILES["assignment"]["name"];
$filetempname=$_FILES["assignment"]["tmp_name"];
$folder = "../assignment/".$file;
move_uploaded_file($filetempname,$folder);
$id=(rand(1000,9999));
$query="INSERT INTO `assignment`(`aid`, `assignment`, `subcode`, `lastdate`, `sem`,  `validation`) VALUES ('$id','$folder','$scode','$ldate','$sem','$validation')";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('Assignment published!')</script>";
    echo"<script>window.open('../admin/assignment.php','_self') </script>";
}
else{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../admin/addassignment.php','_self') </script>";
}
?>