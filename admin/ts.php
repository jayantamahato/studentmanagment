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
table{
    margin-top:50px;
        width:100%;
        border-collapse: collapse;
    }
    th{
        border:1px solid green;
        text-transform: capitalize;
        padding:5px;
        background-color:grey;
    }
    td{
        background-color:black;
        border:1px solid green;
        text-transform: capitalize;
        padding:3px;
    }
    .heading h4{
        text-align:center;
    }
</style>
    </head>
    <body>
        <div class="heading">
            <h4>Teaching Staff</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
    <table>
    <tr>
    <th>id</th>
    <th>pic</th>
    <th>name</th>
    <th>taughtsubject</th>
    <th>designation</th>
    <th>dept</th>
    <th>email</th>
    <th>office phone</th>
    <th>fax</th>
    <th>mobile</th>
    <th>Address</th>
    <th>Operation</th>
    </tr>
    <?php
    include"../backend/config.php";
    $query="SELECT * FROM `facality` WHERE `category`='ts'";
    $run=mysqli_query($conn,$query)or die("connection failed");
    while($fetch=mysqli_fetch_assoc($run))
    {       
    ?> 
    <tr>       
        <td><?php echo $fetch['fsid']?></td>
        <td><img src="<?php echo $fetch['pic']?> " alt=""></td>
        <td><?php echo $fetch['fname']." ".$fetch['lname']?> </td>
        <td><?php echo $fetch['taughtsubject']?> </td>
        <td><?php echo $fetch['designation']?> </td>      
        <td><?php echo $fetch['dept']?> </td>
        <td><?php echo $fetch['email']?> </td>
        <td><?php echo $fetch['ophone']?> </td>
        <td><?php echo $fetch['fax']?> </td>
        <td><?php echo $fetch['mobile']?> </td>
        <td><?php echo $fetch['address']?> </td>
        <td><a href="../backend/tsdelete.php?id=<?php echo $fetch['fsid']; ?>" style="color:red">delete</a>
        <a href="tsedit.php?id=<?php echo $fetch['fsid']; ?>" style="color:orange;padding:2px;">edit</a>       
    </tr>
    <?php
        }
        ?>
</table>

    </body>
</html>