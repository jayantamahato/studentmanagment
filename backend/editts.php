<?php
 $id=$_GET['id'];
 session_start();
 include'config.php';
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }

 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $designation=$_POST['designation'];
 $dept=$_POST['dept'];
 $ophone=$_POST['ophone'];
 $add=$_POST['add'];
 $fax=$_POST['fax'];
 $d1=$_POST['d1'];
 $y1=$_POST['y1'];
 $d2=$_POST['d2'];
 $y2=$_POST['y2'];
 $d3=$_POST['d3'];
 $y3=$_POST['y3'];
 $d4=$_POST['d4'];
 $y4=$_POST['y4'];
 $d5=$_POST['d5'];
 $y5=$_POST['y5'];
 $d6=$_POST['d6'];
 $y6=$_POST['y6'];
 $tsub=$_POST['tsub'];
 $cat='ts';
 $pic=$_FILES["pic"]["name"];
$pictempname=$_FILES["pic"]["tmp_name"];
$folder = "../css/img/".$cat."/".$pic;
move_uploaded_file($pictempname,$folder);
$query= "UPDATE `facality` SET `pic`='$folder',`fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$mobile',`designation`='$designation',`dept`='$dept',`ophone`='$ophone',`fax`='$fax',`address`='$add',`taughtsubject`='$tsub' WHERE `fsid`='$id'";
  $run=mysqli_query($conn,$query);
  if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
        echo"<script>window.open('../admin/ts.php','_self')</script>";
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
        echo"<script>window.open('../admin/adminview.php','_self')</script>";
    }
?>