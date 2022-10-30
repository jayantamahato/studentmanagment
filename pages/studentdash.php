<?php
session_start();
include'../backend/config.php';
$user=$_SESSION['user'];
$query ="SELECT * FROM `students` WHERE `email`='$user'";
$run=mysqli_query($conn,$query);
$fetch=mysqli_fetch_assoc($run);
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
        crossorigin="anonymous"></script>
</head>
<body>
<?php
include'nav.php';
?>
<div class="content">
    <div class="stdnav">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Profile</a>
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
            <div class="basic">
                <h4>Name: <?php echo $fetch['fname']." ".$fetch['lname'];?></h4>
                <h5> Department: <?php echo $fetch['dept'];?></h5>
                <h5> Class Roll: <?php echo $fetch['croll'];?></h5>
                <h5>Date Of Birth: <?php echo $fetch['dob'];?></h5>
            </div>
            <a href="../backend/logout.php"><button type="button" class="btn btn-danger">Log Out</button></a>
        </div>
        <div class="right">
            <div class="heading">
                <h6>Personal Details</h6>
            </div>
            <div class="input-group">
                <span class="input-group-text">First and last name</span>
                <input type="text" aria-label="First name" class="form-control" value="<?php echo $fetch['fname'];?>" disabled >
                <input type="text" aria-label="Last name" class="form-control" value="<?php echo $fetch['lname'];?>" disabled>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Father's Name</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['father'];?>"  disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Mother's Name</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['mother'];?>"  disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Address</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo $fetch['stvill'];?>" disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Post Office</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['po'];?>"  disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Police Station</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo $fetch['ps'];?>" disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">District</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo $fetch['dist'];?>" disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Zip</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['zip'];?>"  disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">State</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['state'];?>"  disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Previous College</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['pcollege'];?>"  disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Previous University</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['puniversity'];?>"  disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Semester</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['semester'];?>"  disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Reg.No</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo $fetch['reg'];?>" disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">reg.Year</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo $fetch['regyear'];?>" disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">Class roll</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['croll'];?>"  disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Roll</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['roll'];?>"  disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">No</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['no'];?>"  disabled >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Phone</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['phone'];?>"  disabled >
                </div>
                <div class="input-group">
                    <span class="input-group-text">email</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo $fetch['email'];?>"  disabled >
                </div>
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