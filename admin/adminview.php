
 <?php
 session_start();
 $passvalue="xyz";
 $passvalue=$_SESSION['pass'];
 if($passvalue != "passed")
 {
    header("location:../index.php");
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin view.css">
    <link rel="stylesheet" href="../css/admin view.css">
    <title>Admin View</title>
</head>
<body>
    <div class="navigation">
        <?php
        include"../pages/nav.php";
        ?>
    </div>
    <div class="content">
        <div class="function_button">           
            <a href="students.php"><button> All Students</button></a>  
            <a href="addstudents.php"><button> Add Students</button></a>        
            <a href="scholars.php"><button> All schollors</button></a>
            <a href="addscholar.php"><button> Add schollors</button></a>
            <a href="ts.php"><button> All facality member</button></a>
            <a href="addts.php"><button> Add facality member</button></a>
            <a href="nts.php"><button> All non teaching staff</button></a>
            <a href="addnts.php"><button> Add non teaching staff</button></a>
            <a href="addnotice.php"><button>Add Notice </button></a>
            <a href="notice.php"><button>All notice </button></a>
            <a href="addevent.php"><button>Add Event </button></a>
            <a href="event.php"><button> All event</button></a>
            <a href="addassignment.php"><button> Add Assignment</button></a>
            <a href="assignment.php"><button> Assignment</button></a>
            <a href="assignmentans.php"><button> Assignment Submition</button></a>
            <div class="logout">
            <a href="../backend/logout.php"><button class="logout"> Log Out</button></a>
            </div>            
        </div>        
    </div>
</body>
</html>