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
            <h4> Notices</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
    <table>
    <tr>
    <th>Notice id</th>
    <th>Notice Title</th>
    <th>Notice topic</th>
    <th>Operation</th>
    </tr>
    <?php
    
    include"../backend/config.php";
    $query="SELECT * FROM `event`";
    $run=mysqli_query($conn,$query)or die("connection failed");
    while($fetch=mysqli_fetch_assoc($run))
    {
    ?>
    <tr>
        <td><?php echo $fetch['eid']?></td>
        <td><?php echo $fetch['title']?> </td>
        <td><?php echo $fetch['topic']?> </td>
        <td><a href="../backend/eventdelete.php?id=<?php echo $fetch['eid']; ?>" style="color:red">delete</a>
    </tr>
    <?php
        }
        ?>
</table>
    </body>
</html>