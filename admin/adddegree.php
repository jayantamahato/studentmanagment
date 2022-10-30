<?php
$id=$_GET['id'];
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
 <style>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap');
*{
    padding:0px;
    margin:0px;
    font-family: 'Manrope', sans-serif;
}    
body{
        background-color:#182847;
        color:white;
    }
img{
        height:80px;
        width:80px;
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
    margin-bottom:30px;
           

        }
        form{
            margin-bottom:30px;
            display:flex;
            align-items:center;
            justify-content:center;
        }
</style>
</head>
<body>
<div class="heading">
    <h4>Add Degree For Teaching Staff</h4>
    <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
</div>
<div class="content">
    <?php
    include"../backend/config.php";
    $query="SELECT * FROM `facality` WHERE `fsid`=$id";
    $run=mysqli_query($conn,$query)or die("connection failed");
    $fetch=mysqli_fetch_assoc($run);     
    ?>
    <div class="details">
        <?php
        echo $fetch['fsid']."/";
        echo $fetch['fname']."".$fetch['lname'];       
        ?>
    </div>
    <br>
    <form action="../backend/adddegree.php?id=<?php echo $id?>" method="post">
    <input type="text" name="degree" placeholder="degree name">
    <input type="text" name="ins" placeholder="institute name">
    <input type="text" name="year" placeholder="year">
    <button type="submit">Submit</button>
    </form>
</div>

</body> 
</html>