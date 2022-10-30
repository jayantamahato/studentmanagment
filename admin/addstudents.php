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
    <title>add student</title>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap');
        *{
            padding:0px;
            margin:0px;
            font-family: 'Manrope', sans-serif;
        }
        body
        {
            background-color:#182847;
        }
        .heading{
            background-color:white;
        }
        .heading h4{
            text-align:center;
        }
        .heading h3{
            margin-left:20px;
        }
        .content{
            display:flex;
            align-items:center;
            justify-content:center;

        }
        form{
            margin-top:50px;
            
           
        }
        input{
            width:200px;
            margin-bottom:20px;
            height:40px;
            border:1px solid #3db166;
            padding:5px;

        }
        textarea{
            width:600px;
            border:1px solid #3db166;
            padding:5px;

        }
        .btn{
            display:flex;
            flex-direction:row;
            justify-content: space-between;
        }
        .btn button{
            width:200px;
            height:40px;
           text-align:center;
           border:none;
        }
        .btn>.reset{
            background-color:red;
        }
    </style>
    </head>
    <body>
    <div class="heading">
            <h4>Add Students</h4>
            <h3><a  style="color:red;text-decoration:none;" href="adminview.php">exit</a></h3>
        </div>
<div class="content">
            <form action="../backend/addstudent.php" method="post">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required><br><br>
                <input type="text" name="con" placeholder="Phone Number" required>
                <input type="text" name="email" placeholder="Email Address" required><br>
                <input type="text" name="father" placeholder="Father's Name" required>
                <input type="text" name="mother" placeholder="Mother's Name" required><br><br>
                <label for="subject">Choose Department:</label>

                <select name="subject" id="subject" required>
                    <option></option>
                  <option value="M.C.A">M.C.A</option>
                  <option value="Computer Science">M.sc Computer Science</option>
                </select>
                <label for="CurrentClass">Choose Semester:</label>

                <select name="currentclass" id="CurrentClass" required>
                    <option></option>
                  <option value="1st Sem">1st Sem</option>
                  <option value="2st Sem">2nd Sem</option>
                  <option value="2st Sem">3rd Sem</option>
                  <option value="2st Sem">4th Sem</option>
                  <option value="2st Sem">5th Sem</option>
                  <option value="2st Sem">6th Sem</option>
                  <option value="passout">Passout</option>
                </select><br><br>
                <label for="gender">Gender:</label>

                <select name="gender" id="gender" required>
                    <option></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" placeholder="date of birth" required><br><br>
                <input type="text" name="regyear" placeholder="Reg. Year" required>
                <input type="text" name="regno" placeholder="Registration No." required><br>
                <input type="text" name="roll" placeholder="Roll." required>
                <input type="text" name="no" placeholder="No." required><br>
                <input type="text" name="croll" placeholder="class roll." required><br>
                <input type="text" name="villst" placeholder="Vill/Street Name" required>
                <input type="text" name="postoffice" placeholder="Post Office" required><br>
                <input type="text" name="policestation" placeholder="Police Station" required>
                <input type="text" name="dist" placeholder="District" required><br>
                <input type="text" name="zip" placeholder="Zip Code" required>
                <input type="text" name="state" placeholder="State" required><br>
                <input type="text" name="precollege" placeholder="Previous College" required>
                <input type="text" name="preuniversity" placeholder="Previous University" required ><br>
                <input style="font-size: 12px; padding: 0px; margin: 0px;" type="file" name="profilepic" placeholder="Profile Picture"><br><br>
                <input type="password" name="pass" placeholder=" Set Password" required>
                <input type="password" name="conpass" placeholder="Confirm Password" required>

                <div class="btn">
        <button type="submit">Submit</button>
        <button class="reset" type="reset">Reset</button>
        </div>
            </form>
</div>
    </body>
</html>