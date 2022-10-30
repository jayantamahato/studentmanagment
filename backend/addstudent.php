<?php
include'config.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$phone=$_POST['con'];
$email=$_POST['email'];
$dept=$_POST['subject'];
$current=$_POST['currentclass'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$reg=$_POST['regno'];
$regyear=$_POST['regyear'];
$stvill=$_POST['villst'];
$po=$_POST['postoffice'];
$ps=$_POST['policestation'];
$dist=$_POST['dist'];
$state=$_POST['state'];
$pcollege=$_POST['precollege'];
$puniversity=$_POST['preuniversity'];
$pass1=$_POST['pass'];
$pass2=$_POST['conpass'];
$roll=$_POST['roll'];
$no=$_POST['no'];
$croll=$_POST['croll'];
$zip=$_POST['zip'];
$pic=$_FILES["pic"]["name"];
$pictempname=$_FILES["pic"]["tmp_name"];
$folder = "../css/img/std".$pic;
move_uploaded_file($pictempname,$folder);
$id=(rand(1,9999));
$sql="SELECT*FROM`students` WHERE `email`='$email'";
$res=mysqli_query($conn,$sql);
if($res=='1')
{
    echo "<script> alert('email Already Used!')</script>";
    echo"<script>window.open('../index.php','_self') </script>";
}
else
{
$query="INSERT INTO `students`(`fname`,`lname`,`pp`,`father`,`mother`,`dob`,`stvill`,`po`,`ps`,`dist`,`zip`,`pcollege`,`puniversity`,`dept`,`semester`,`reg`,`regyear`,`roll`,`no`,`croll`,`studentid`,`gender`,`email`,`phone`, `password`) VALUES ('$fname','$lname','$folder','$father','$mother','$dob','$stvill','$po','$ps','$dist','$zip','$pcollege','$puniversity','$dept','$current','$reg','$regyear','$roll','$no','$croll','$id','$gender','$email','$phone','$pass2')";
$run=mysqli_query($conn,$query);
if($run=='1')
{
    echo "<script> alert('stdent added!')</script>";
    echo"<script>window.open('../index.php','_self') </script>";
}
else{
    echo "<script> alert('error!')</script>";
    echo"<script>window.open('../index.php','_self') </script>";
}
}
?>