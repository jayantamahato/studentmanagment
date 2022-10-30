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
            <h4> Assignment</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
        <div class="content">

        </div>
    <table>
    <tr>
        <th>
        Assignment id
        </th>
        <th>
        Assignment
        </th>
        <th>
        Last date
        </th>
        <th>
        Semester
        </th>
        <th>
        Sub Code
        </th>
        <th>
        Validation
        </th>
        <th>
        operation
        </th>
    </tr>
        <?php
        include'../backend/config.php';
        $query ="SELECT * FROM `assignment`";
        $run=mysqli_query($conn,$query);
        while( $fetch=mysqli_fetch_assoc($run))
            {
            ?>
           <tr>
            <td>
                <?php echo $fetch['aid'];?>
            </td>
            <td>
                <?php echo $fetch['assignment'];?>
            </td>
            
            <td>
                <?php echo $fetch['lastdate'];?>
            </td>
            <td>
                <?php echo $fetch['sem'];?>
            </td>
            <td>
                <?php echo $fetch['subcode'];?>
            </td>
            
            <td>
                <?php echo $fetch['validation'];?>
            </td>
            <td>
                <a href="../backend/deleteassignment.php?id=<?php echo $fetch['aid'];?>" style="color:red;">delete</a>
                <a href="editassignment.php?id=<?php echo $fetch['aid'];?>"style="color:orange;">edit</a>
            </td>
           </tr>
           <?php
            }
            ?>
             </table>
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