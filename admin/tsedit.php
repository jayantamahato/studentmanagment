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
    <title>Edit Teaching Staff</title>
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
            <h4>Edit Teaching Staff</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
<div class="content">
<?php
include'../backend/config.php';
    $id=$_GET['id'];
    $sql="SELECT*FROM `facality` WHERE `fsid`='$id'";
    $run=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_assoc($run);
    ?>
            <form action="../backend/editts.php?id=<?php echo $fetch['fsid']; ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="fname" value=<?php echo "{$fetch['fname']}";?>>
                <input type="text" name="lname" value=<?php echo "{$fetch['lname']}";?>>
                <input type="text" name="designation" value=<?php echo "{$fetch['designation']}";?>>
                <input type="text" name="dept" value=<?php echo "{$fetch['dept']}";?>>
                <input type="text" name="mobile" value=<?php echo "{$fetch['mobile']}";?>>
                <input type="email" name="email"value=<?php echo "{$fetch['email']}";?>>
                <input type="text" name="ophone" value=<?php echo "{$fetch['ophone']}";?>>
                <input type="text" name="add" value=<?php echo "{$fetch['address']}";?>>
                <input type="text" name="fax" value=<?php echo "{$fetch['fax']}";?>>
                <input type="text" name="tsub" value=<?php echo "{$fetch['taughtsubject']}";?>>
                main pic:<input type="file" name="pic" style="width: 20%;" value=<?php echo "{$fetch['pic']}";?>>
                <button type="submit">Submit</button>
            </form>
</div>
    </body>
</html>