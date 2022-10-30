<?php
session_start();
    $user=$_POST['id'];
    $password=$_POST['password'];
    if($user=='Admin' and $password=='VuCs@123')
    {
        header("location:../admin/adminview.php");
        $_SESSION['pass']="passed";
    }
    else{
        echo "<script>alert('please provide correct user and password')</script>";
        echo "<script> window.open('../pages/admin_login.php')</script>";
    }

?>