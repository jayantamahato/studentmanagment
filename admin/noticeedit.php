<?php
 session_start();
 $passvalue="xyz";
 $id=$_GET['id'];
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit notice</title>
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
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
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
        <h4>EditNotices</h4>
        <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
    </div>
    <div class="content">
       <form action="../backend/editnotice.php?id=<?php echo $id;?>" method="post">
       <label for="operation">Update For:</label>
                <select id="operation" name="operation">
                    <option value="title">Title</option>
                    <option value="topic">Topic</option>
                    <option value="pdate">Published Date</option>
                </select><br>
                <input type="text" name="title" placeholder="Notice Title" ><br>
        <textarea name="topic" id="topic" cols="90" rows="10">
        type notice here...(first clear it)
        </textarea><br>
        <input type="date" name="pdate"palceholder="pdate"><br>
        <div class="btn">
        <button type="submit">Submit</button>
        <button class="reset" type="reset">Reset</button>
        </div>
       </form>
    </div>
</body>
</html>