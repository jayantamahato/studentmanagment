<?php
include'config.php';
$id=$_GET['id'];
$operation=$_POST['operation'];
$title=$_POST['title'];
$topic=$_POST['topic'];
$pdate=$_POST['pdate'];

if($operation=='title')
{
  $query= "UPDATE `notice` SET `title`='$title' WHERE `noticeid`='$id'";
  $run=mysqli_query($conn,$query);
  if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../admin/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../admin/adminview.php");
    }
}

elseif($operation=='topic')
{
    $query= "UPDATE `notice` SET `topic`='$topic' WHERE `noticeid`='$id'";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../admin/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../admin/adminview.php");
    }
}
elseif($operation=="pdate")
{
    $query= "UPDATE `notice` SET `publishedate`='$pdate' WHERE `noticeid`='$id'";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../admin/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../admin/adminview.php");
    }
}

?>