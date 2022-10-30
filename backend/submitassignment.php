<?php
include'config.php';
$id=$_GET['id'];
$scode=$_GET['subcode'];
$asid=$_GET['asid'];
$status='Submited';
$file=$_FILES["ans"]["name"];
$filetempname=$_FILES["ans"]["tmp_name"];
$folder = "../assignment".$file;
move_uploaded_file($filetempname,$folder);
$sql="SELECT*FROM`students` WHERE `studentid`='$id'";
$result=mysqli_query($conn,$sql);
$student=mysqli_fetch_assoc($result);
$name=$student['fname'].$student['lname'];
$roll=$student['croll'];
$sem=$student['semester'];
$ansid=(rand(1,999));
$query="INSERT INTO `assignmentans`(`asid`, `sid`, `coll`, `name`, `ans`, `status`,`sem`, `subcode`,`ansid`) VALUES ('$asid','$id','$roll','$name','$folder','$status','$sem','$scode','$ansid')";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('Assignment submited!')</script>";
    echo"<script>window.open('../pages/assignment.php','_self') </script>";
}
else{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../pages/addassignment.php','_self') </script>";
}

?>