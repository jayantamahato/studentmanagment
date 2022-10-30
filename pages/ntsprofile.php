<?php
$id=$_GET['id'];
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
    <link rel="stylesheet" href="../css/ntsprofile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <style>
        .content{
            height:71vh;
        }
        .top{
            padding:50px;
        }
        </style>
</head>
<body>
<?php
include'nav.php';
?>
<div class="content">
    <?php
    include'../backend/config.php';
    $sql="SELECT*FROM`facality` WHERE `fsid`='$id'";
    $run=mysqli_query($conn,$sql);
    $fetch=mysqli_fetch_assoc($run);
    ?>
    <div class="top">
        <div class="left">
            <img src="<?php echo $fetch['pic'];?>" alt="">
        </div>
        <div class="right">
            <h5>Name:<?php echo $fetch['fname']." ".$fetch['lname'];?></h5>
            <h5>Designation: <?php echo $fetch['designation'];?></h5>
            <h5>Department: <?php echo $fetch['dept'];?></h5> 
            <h5>Contact No.: <?php echo $fetch['mobile'];?></h5>
            <h5>email: <?php echo $fetch['email'];?></h5>
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