
 <?php
 session_start();
 $passvalue="xyz";
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
    <link rel="stylesheet" href="../css/admin view.css">
    <link rel="stylesheet" href="../css/admin view.css">
    <title>Admin View</title>
</head>
<body>
    <div class="navigation">
        <?php
        include"../pages/nav.php";
        ?>
    </div>
    <div class="content">
        <div class="details" style="color: white;">
            <?php
            include'../backend/config.php';
            $id=$_GET['id'];
            $sql="SELECT*FROM `assignmentans` WHERE `ansid`='$id'";
            $run=mysqli_query($conn,$sql);
            $fetch=mysqli_fetch_assoc($run);
            ?>
            Name:<?php echo $fetch['name'];?>
            Roll:<?php echo $fetch['coll'];?>
        </div>
        <div class="function_button">           
            <a href="../backend/verifyassignment.php?id=<?php echo $id; ?>"><button> Verify assignment</button></a>
            <a href="../backend/reject.php?id=<?php echo $id; ?>"><button> Reject assignment</button></a>     
        </div>        
    </div>
</body>
</html>