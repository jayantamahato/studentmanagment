<?php
$id=$_GET['id'];
include'../backend/config.php';
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
        <style>
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
            margin-top:-8px;
        }
        </style>
</head>
<body>
<div class="heading">
            <h4> Sudent Details</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>

<div class="content">
    
    <div class="details">
    <?php
    include'../backend/config.php';
    $sql="SELECT*FROM`students`WHERE `studentid`='$id'";
    $run=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_assoc($run);
    ?>
        <div class="left">
            <div class="pp">
                <img src="<?php echo $fetch['pp'];?>" alt="profile picture">
            </div>
            <div class="basic">
                <form action="../backend/studentppedit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                main pic:<input type="file" name="pic" style="width: 100%;"><br><br>
                <button type="submit" class="btn btn-danger">Update</button></a>    
            </form>
            </div>
        </div>
        <div class="right">
            <form action="../backend/studentedit.php?id=<?php echo $id;?>" method="post">
            <div class="heading">
                <h6>Personal Details</h6>
            </div>
            <div class="input-group">
                <span class="input-group-text">First and last name</span>
                <input type="text" aria-label="First name" class="form-control" name="fname" value="<?php echo "{$fetch['fname']}";?>">
                <input type="text" aria-label="Last name" class="form-control" value="<?php echo "{$fetch['lname']}";?>" name="lname">
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">dept</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['dept']}";?>" name="subject">
                </div>
                <div class="input-group">
                    <span class="input-group-text">dob</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['dob']}";?>" name="dob">
                </div>
            </div>          
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Father's Name</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['father']}";?>" name="father">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Mother's Name</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['mother']}";?>" name="mother" >
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Address</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['stvill']}";?>" name="villst">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Post Office</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['po']}";?>" name="postoffice">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Police Station</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['ps']}";?>" name="policestation">
                </div>
                <div class="input-group">
                    <span class="input-group-text">District</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['dist']}";?>" name="dist">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Zip</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['zip']}";?>" name="zip">
                </div>
                <div class="input-group">
                    <span class="input-group-text">State</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['state']}";?>" name="state">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Previous College</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['pcollege']}";?>" name="precollege">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Previous University</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['puniversity']}";?>" name="preuniversity">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Semester</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['semester']}";?>" name="semester">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Reg.No</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['reg']}";?>" name="regno">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">reg.Year</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['regyear']}";?>" name="regyear">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Class roll</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['croll']}";?>" name="croll">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Roll</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['roll']}";?>" name="roll">
                </div>
                <div class="input-group">
                    <span class="input-group-text">No</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['no']}";?>" name="no">
                </div>
            </div>
            <div class="set">
                <div class="input-group">
                    <span class="input-group-text">Phone</span>
                    <input type="text" aria-label="First name" class="form-control"value="<?php echo "{$fetch['phone']}";?>" name="con">
                </div>
                <div class="input-group">
                    <span class="input-group-text">email</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['email']}";?>" name="email">
                </div>
            </div>
            <div class="set">
            <div class="input-group">
                    <span class="input-group-text">Gender</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['gender']}";?>" name="gender">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Password</span>
                    <input type="text" aria-label="First name" class="form-control" value="<?php echo "{$fetch['password']}";?>" name="pass">
                </div>
            </div>
            <button type="submit">Update</button>
    </div>
   
    </form>
   
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