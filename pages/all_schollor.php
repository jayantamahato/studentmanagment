<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholar</title>
    <link rel="stylesheet" href="../css/all_faculty.css">
</head>
<body>
    <?php include'nav.php';   
    include'../backend/config.php';?>   
    <div class="main_container">
        <div class="heading">
            <h4>List Of The Scholars Awarded Ph.D.</h4>
        </div>
        <div class="main_container_child" style="color:#3db166;">            
            <div class="name">
                <p>Name</p>
            </div>  
            <div class="doa">
                <p>Date of award</p> 
            </div>            
        </div>
        <?php
        $sql="SELECT * FROM `phd`";
        $run= mysqli_query($conn,$sql);
        while($fetch = mysqli_fetch_assoc($run))
        {
        ?>       
        <div class="main_container_child">
            
            <div class="name">
                <p><?php echo $fetch['fname']." ".$fetch['lname'];?></p>
            </div>  
            <div class="doa">
                <p><?php echo $fetch['doa'];?></p> 
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