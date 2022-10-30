<?php
 session_start();
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 ?>

<html>
    <head>
    <title>Add Teaching Staff</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap');
        *{
            padding:0px;
            margin:0px;
            font-family: 'Manrope', sans-serif;
        }
        body
        {
            background-color:#182847;
        }
        .heading{
            background-color:white;
        }
        .heading h4{
            text-align:center;
        }
        .heading h3{
            margin-left:20px;
        }
        .content{
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;

        }
        form{
            margin-top:50px;
            
           
        }
        input{
            width:200px;
            margin-bottom:20px;
            height:40px;
            border:1px solid #3db166;
            padding:5px;

        }
        textarea{
            width:600px;
            border:1px solid #3db166;
            padding:5px;

        }
        .btn{
            display:flex;
            flex-direction:row;
            justify-content: space-between;
        }
        .btn button{
            width:200px;
            height:40px;
           text-align:center;
           border:none;
        }
        .btn>.reset{
            background-color:red;
        }
    </style>
    </head>
    <body>
    <div class="heading">
            <h4>Add Teaching Staff</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
<div class="content">
            <form action="../backend/addts.php" method="post" enctype="multipart/form-data">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name"required>
                <input type="text" name="designation" placeholder="Designation"required>
                <input type="text" name="dept" placeholder="dept"required>
                <input type="text" name="mobile" placeholder="mobile"required>
                <input type="email" name="email" placeholder="email"required>
                <input type="text" name="ophone" placeholder="office phone"required>
                <input type="text" name="add" placeholder="Address"required>
                <input type="text" name="fax" placeholder="fax">
                <input type="text" name="tsub" placeholder="taught subjects">
                main pic:<input type="file" name="pic" style="width: 20%;">
                <button type="submit">Submit</button>
            </form><br>
            <a href="degree.php"><button>Add Degree</button></a>
</div>
    </body>
</html>