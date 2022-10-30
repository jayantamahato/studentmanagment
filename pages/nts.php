<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non Teaching Staff</title>
    <link rel="stylesheet" href="../css/all_faculty.css">
</head>

<body>
    <?php include'nav.php';
    include'../backend/config.php';
    ?>  
    
    <div class="main_container">
        <div class="heading">
            <h4>Non Teaching Staff</h4>
        </div>
       

        <div class="main_container_child"  style="color:#3db166;">
            <div class="pp">
            <p>Profile Picture</p>
            </div> 
            <div class="name">
                <p>Name</p>
            </div>  
            <div class="designation">
                <p>Designation</p> 
            </div>
            <div class="mail">
                <p>email Address</p>
            </div>
            <div class="goto">
                <p>Goto</p>
            </div>
        </div>
        <?php
        $query="SELECT * FROM `facality` WHERE `category`='nts'";
        $run=mysqli_query($conn,$query)or die("connection failed");
        while($fetch = mysqli_fetch_assoc($run))
        {
        ?>
        <div class="main_container_child">
            <div class="pp">
                <img src="<?php echo $fetch['pic'];?>" alt="">
            </div> 
            <div class="name">
                <p><?php echo $fetch['fname']." ".$fetch['lname'];?></p>
            </div>  
            <div class="designation">
                <p><?php echo $fetch['designation'];?></p> 
            </div>
            <div class="mail">
                <p><?php echo $fetch['email'];?></p>
            </div>
            <div class="goto">
            <a href="ntsprofile.php?id=<?php echo $fetch['fsid'];?>">Profile</a>
            </div>
        </div>
        <?php
    }
    ?>
        

        
    </div>
    
    <footer class="main-footer">
        <p class="main-footer_child">Copyright @ All Right Reserved 2022, Vidyasagar University</p>
    </footer>

</body>

</html>