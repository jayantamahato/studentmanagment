<?php
 session_start();
 include'../backend/config.php';
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 ?>

<html>
    <head>
    <title>Add Scholar</title>
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
            <h4>Edit Scholar</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
<div class="content">
    <?php
    $id=$_GET['id'];
    $sql="SELECT*FROM`phd`WHERE`scid`='$id'";
    $run=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_assoc($run);
    
    ?>
            <form action="../backend/editscholars.php?id=<?php echo $id;?>" method="post">
                <input type="text" name="fname" value=<?php echo "{$fetch['fname']}";?>>
                <input type="text" name="lname" value=<?php echo "{$fetch['lname']}";?>>
                <input type="text" name="doa"  value=<?php echo "{$fetch['doa']}";?>>
                <button type="submit">Submit</button>
            </form>
</div>
    </body>
</html>