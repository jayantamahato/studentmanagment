<?php
 $id=$_GET['id'];
 include'../backend/config.php';
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
    <?php
 
    $sql="SELECT*FROM`assignment`WHERE`aid`='$id'";
    $run=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_assoc($run);
    ?>
    <form action="../backend/editassignment.php?id=<?php echo $id;?>" method="post" enctype= multipart/form-data>
        <input type="text" name="scode" placeholder="Subject Code"value="<?php echo "{$fetch['subcode']}";?>" ><br>
        Last Submition Date:<input type="text" name="ldate" id="publish date" placeholder="publish date" value="<?php echo "{$fetch['lastdate']}";?>"><br>
        <input type="text" name="sem" placeholder="Subject Code"value="<?php echo "{$fetch['sem']}";?>" ><br>
        <input type="text" name="validation" placeholder="Subject Code"value="<?php echo "{$fetch['validation']}";?>" ><br>
        <div class="btn">
        <button type="submit">Submit</button>
        <button class="reset" type="reset">Reset</button>
        </div>
        
    </form>
</div>
    </body>
</html>