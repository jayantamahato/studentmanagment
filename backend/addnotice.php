<?php
include'config.php';
$title=$_POST['title'];
$topic=$_POST['topic'];
$pdate=$_POST['pdate'];
$file=$_FILES["notice"]["name"];
$filetempname=$_FILES["notice"]["tmp_name"];
$folder = "../notice/".$file;
move_uploaded_file($filetempname,$folder);
$noticefile="notice/".$file;
$id=(rand(10,9999));
$query="INSERT INTO `notice`(`noticeid`, `publishdate`, `title`, `topic`,`noticefile`)VALUES('$id','$pdate','$title','$topic','$noticefile')";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('notice published!')</script>";
    echo"<script>window.open('../admin/notice.php','_self') </script>";
}
else{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../admin/addnotice.php','_self') </script>";
}
?>