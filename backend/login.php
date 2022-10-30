<?php
session_start();
include'config.php';
$email=$_POST['email'];
$pwd=$_POST['password'];
$_SESSION['user']=$email;
    if($_POST['email']!=""&& $_POST['password']!="")
    {
        
        $query="SELECT `email`,`password`FROM `students` WHERE `email`='$email'AND `password`='$pwd'";
        $run=mysqli_query($conn,$query);
        $fetch=mysqli_num_rows($run);
            if($fetch==1)
                {
                   
                    echo"<script>alert('log in sucessful')</script>";
                    echo"<script>window.open('../pages/studentdash.php','_self')</script>";                                      
                }
            else
                {
                echo"<script>alert('user not found')</script>";
                echo"<script>window.open('../pages/login.php','_self')</script>";
                }       
    }
    else{
        echo"<script>alert('please check again')</script>";
        echo"<script>window.open('../links/login.php','_self')</script>";
    }



?>