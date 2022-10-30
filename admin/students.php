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
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');
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
            width:180%;
        }
        .heading h4{
            text-align:center;
        }
        .heading h3{
            margin-left:20px;
        }
table{
    margin-top:50px;
        width:180%;
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
            <h4> All Students list</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
    <table>
    <tr>
    <th>id</th>
    <th>first name</th>
    <th>last name</th>
    <th>father's name</th>
    <th>mother's name</th>
    <th>dob</th>
    <th>gender</th>
    <th>email</th>
    <th>contact no</th>
    <th>street name/village</th>
    <th>post office</th>
    <th>police station</th>
    <th>district</th>
    <th>zip code</th>
    <th>state</th>
    <th>previous college</th>
    <th>previous university</th>
    <th>Dept</th>
    <th>semester</th>
    <th>reg.no</th>
    <th>reg. year</th>
    <th>roll</th>
    <th>no</th>
    <th>class roll</th>
    <th>operation</th>
    </tr>
    <?php
    
    include"../backend/config.php";
    $query="SELECT * FROM `students`";
    $run=mysqli_query($conn,$query)or die("connection failed");
    while($fetch=mysqli_fetch_assoc($run))
    {
        
    
    ?>
  
    <tr>
   
        <td><?php echo $fetch['studentid']?></td>
        <td><?php echo $fetch['fname']?></td>
        <td><?php echo $fetch['lname']?> </td>
        <td><?php echo $fetch['father']?> </td>
        <td><?php echo $fetch['mother']?> </td>
        <td><?php echo $fetch['dob']?> </td>
        <td><?php echo $fetch['gender']?></td>
        <td><?php echo $fetch['email']?></td>
        <td><?php echo $fetch['phone']?></td>
        <td><?php echo $fetch['stvill']?> </td>
        <td><?php echo $fetch['po']?></td>
        <td><?php echo $fetch['ps']?></td>
        <td><?php echo $fetch['dist']?></td>
        <td><?php echo $fetch['zip']?></td>
        <td><?php echo $fetch['state']?></td>
        <td><?php echo $fetch['pcollege']?></td>
        <td><?php echo $fetch['puniversity']?></td>
        <td><?php echo $fetch['dept']?></td>
        <td><?php echo $fetch['semester']?></td>
        <td><?php echo $fetch['reg']?></td>
        <td><?php echo $fetch['regyear']?></td>
        <td><?php echo $fetch['roll']?></td>
        <td><?php echo $fetch['no']?></td>
        <td><?php echo $fetch['croll']?></td>
        <td><a href="../backend/studentdelete.php?id=<?php echo $fetch['studentid']; ?>" style="color:red">delete</a>
        <a href="studentedit.php?id=<?php echo $fetch['studentid']; ?>" style="color:orange;padding:2px;">edit</a>
        
    </tr>
    <?php
        }
        ?>

</table>

    </body>
</html>