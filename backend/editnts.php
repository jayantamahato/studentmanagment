<?php
 session_start();
 include'config.php';
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 $id=$_GET['id'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $designation=$_POST['designation'];
 $dept=$_POST['dept'];

 $cat="nts";
 $pic=$_FILES["pic"]["name"];
$pictempname=$_FILES["pic"]["tmp_name"];
$folder = "../css/img/".$cat."/".$pic;
move_uploaded_file($pictempname,$folder);
$query= "UPDATE `facality` SET `pic`='$folder',`fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$mobile',`designation`='$designation',`dept`='$dept' WHERE `fsid`='$id'";
  $run=mysqli_query($conn,$query);
  if($run==1)
    {
      echo "<script> alert('update sucessful')</script>";
      echo"<script>window.open('../admin/nts.php','_self')</script>";
    }
    else{
      echo "<script> alert('update unsucessful')</script>";
      echo"<script>window.open('../admin/adminview.php','_self')</script>";
    }
?>