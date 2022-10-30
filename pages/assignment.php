<?php
session_start();
include'../backend/config.php';
$user=$_SESSION['user'];
$query ="SELECT * FROM `students` WHERE `email`='$user'";
$run=mysqli_query($conn,$query);
$fetch=mysqli_fetch_assoc($run);
$sid=$fetch['studentid'];
if($user=='')
{
     echo "<script> window.open('../pages/login.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidyasagar University | Dept. Of Computer Science</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stddash.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>
    <style>
        .left{
            width:200px;
        }
        .details{
            width:99%;
        }
        .right
        {
            width:85%;
        }
        .assignment{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            width: 100%;
            border-bottom: 1px solid grey;
            height: 61px;
             padding: 13px;
        }
        #assignment{
            display:flex;
        }
        .assignment input{
            width:207px;
        }
    </style>

</head>
<body>
<?php
include'nav.php';
?>
<div class="content">
    <div class="stdnav">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="studentdash.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Notice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="assignment.php">Assignment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="changepassword.php?id=<?php echo $fetch['studentid'];?>">Change Password</a>
            </li>
        </ul>
    </div>
    <div class="details">
        <div class="left">
            <div class="pp">
                <img src="<?php echo $fetch['pp'] ;?>" alt="">
            </div>
            <div class="basic" >
                <?php echo $fetch['fname']." ".$fetch['lname'];?>
                Department: <?php echo $fetch['dept'];?>
                Semester: <?php echo $fetch['semester'];$sem=$fetch['semester'];?>
                Class Roll: <?php echo $fetch['croll'];?>
            </div>
            <a href="../backend/logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
        </div>
        <div class="right">
        <?php
         $query="SELECT * FROM `assignment` WHERE `sem`='$sem'&&`validation`='valid'";
         $run=mysqli_query($conn,$query);
       
        ?>
            <div class="heading">
                <h6>Assignment</h6>
            </div>
            <?php
            while( $assignment=mysqli_fetch_assoc($run))
            {
                $asid=$assignment['aid'];
                $sql ="SELECT * FROM `assignmentans` WHERE `asid`='$asid' && `sid`='$sid' && `status`='submited'";
                $result=mysqli_query($conn,$sql) or die('connection error!');
                if($result=='1')
                {
                echo '<style type="text/css">
                #assignent {display: none;}
                </style>';
                continue;
                }
                else
                { 
                    echo '<style type="text/css">
                    #assignment {display: block; display:flex;}
                    </style>';
                }
               
            ?>
            <div class="assignment" id="assignment">
            Sub Code: <?php echo $assignment['subcode'];?>
            Assignment: <a href="<?php echo $assignment['assignment'];?>" download="<?php echo $assignment['subcode'];?>">click to download</a>
            <form action="../backend/submitassignment.php?id=<?php echo $sid; ?>&& subcode=<?php echo $assignment['subcode'];?>&&asid=<?php echo $asid;?>" method="post" enctype= multipart/form-data>
                Your Ans:<input type="file" name="ans" id="inputform">
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
            Last Date: <?php echo $assignment['lastdate'];?>
            </div>
            <?php
            }
            ?>
        </div>    
          
    </div>
   
</div>
<footer class="main-footer">
        <p class="main-footer_child">Copyright @ All Right Reserved 2022, Vidyasagar University</p>
    </footer>
</body>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</html>