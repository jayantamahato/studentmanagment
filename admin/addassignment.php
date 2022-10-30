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
    <title>add notice</title>
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
            color:white;
        }
        .heading{
            background-color:white;
            color:black;
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

        }
        form{
            margin-top:50px;
            display:flex;
            flex-direction:column;
        }
        input{
            width:600px;
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
            <h4>Add Assignment</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
<div class="content">
    <form action="../backend/addassignment.php" method="post" enctype= multipart/form-data>
        <input type="text" name="scode" placeholder="Subject Code" ><br>
        Last Submition Date:<input type="date" name="ldate" id="publish date" placeholder="publish date"><br>
        Select Sem:<select name="sem" id="CurrentClass" required>
                    <option></option>
                  <option value="1st Sem">1st Sem</option>
                  <option value="2nd Sem">2nd Sem</option>
                  <option value="3rd Sem">3rd Sem</option>
                  <option value="4th Sem">4th Sem</option>
                  <option value="5th Sem">5th Sem</option>
                  <option value="6th Sem">6th Sem</option>
                </select><br><br>
                Status:<select name="status" id="CurrentClass" required>
                  <option value="pending">pending</option>
                  <option value="verified">verified</option>
                  <option value="unchecked">Unchecked</option>
                  <option value="wrong">Not Correct</option>
                </select><br><br>
               Validation: <select name="validation" id="CurrentClass" required>
                    <option value="valid">valid</option>
                  <option value="unvalid">Unvalid</option>
              
                </select><br><br>
                Assignment: <input type="file" name="assignment" id="">
        <div class="btn">
        <button type="submit">Submit</button>
        <button class="reset" type="reset">Reset</button>
        </div>
        
    </form>
</div>
    </body>
</html>