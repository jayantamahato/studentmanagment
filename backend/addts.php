
 <?php
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
 $tsub=$_POST['tsub'];
 $id=(rand(1,9999));
 $cat="ts";
 $pic=$_FILES["pic"]["name"];
$pictempname=$_FILES["pic"]["tmp_name"];
$folder = "../css/img/".$cat."/".$pic;
move_uploaded_file($pictempname,$folder);
 $sql="INSERT INTO `facality`(`pic`, `fname`, `lname`, `designation`, `taughtsubject`, `dept`, `ophone`, `email`, `fax`, `mobile`, `address`, `fsid`, `category`) VALUES ('$folder','$fname','$lname','$designation','$tsub','$dept','$ophone','$email','$fax','$mobile','$add','$id','$cat')";
 $run=mysqli_query($conn,$sql);
 if($run=='1')
 {
    echo "<script> alert('staff added!')</script>";
    echo"<script>window.open('../admin/ts.php','_self') </script>";
  
 }
 else
 {
    echo "<script> alert('erroe!')</script>";
    echo"<script>window.open('../admin/addts.php','_self') </script>";
 }
 ?>
