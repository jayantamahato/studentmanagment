<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidyasagar University | Dept.Of Computer Science | Login</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="content">
       
        <div class="login-box">
            <div class="heading">
                <h2>PERSONAL DETAILS</h2>
            </div>
            <form action="../backend/addstudent.php" method="post" enctype="multipart/form-data">
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required><br><br>
                <input type="text" name="con" placeholder="Phone Number" required>
                <input type="text" name="email" placeholder="Email Address" required><br>
                <input type="text" name="father" placeholder="Father's Name" required>
                <input type="text" name="mother" placeholder="Mother's Name" required><br><br>
                <label for="subject">Choose Your Department:</label>

                <select name="subject" id="subject" required>
                    <option></option>
                  <option value="M.C.A">M.C.A</option>
                  <option value="Computer Science">M.sc Computer Science</option>
                </select>
                <label for="CurrentClass">Choose Your Semester:</label>

                <select name="currentclass" id="CurrentClass" required>
                    <option></option>
                  <option value="1st Sem">1st Sem</option>
                  <option value="2nd Sem">2nd Sem</option>
                  <option value="3rd Sem">3rd Sem</option>
                  <option value="4th Sem">4th Sem</option>
                  <option value="5th Sem">5th Sem</option>
                  <option value="6th Sem">6th Sem</option>
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
                <input type="text" name="regyear" placeholder="Reg Year" required><br>
                <input type="text" name="roll" placeholder="Roll" required>
                <input type="text" name="no" placeholder="No." required><br>
                <input type="text" name="croll" placeholder="classroll" required>
                <input type="text" name="regno" placeholder="Registration No." required><br>
                <input type="text" name="villst" placeholder="Vill/Street Name" required>
                <input type="text" name="postoffice" placeholder="Post Office" required><br>
                <input type="text" name="policestation" placeholder="Police Station" required>
                <input type="text" name="dist" placeholder="District" required><br>
                <input type="text" name="zip" placeholder="zip" required>
                <input type="text" name="state" placeholder="State" required><br>
                <input type="text" name="precollege" placeholder="Previous College" required><br>
                <input type="text" name="preuniversity" placeholder="Previous University" required >
                <input style="font-size: 12px; padding: 0px; margin: 0px;" type="file" name="pic" placeholder="Profile Picture"><br>
                <input type="password" name="pass" placeholder=" Set Password" required>
                <input type="password" name="conpass" placeholder="Confirm Password" required>

                <button type="submit">Submit</button>
            </form>
        </div>
        
    </div>
    <div class="exit">
        <a href="../index.html"><img src="../css/img/pngegg.png" alt=""></a>
    </div>
    <footer class="main-footer">
        <p class="main-footer_child">Copyright @ All Right Reserved 2022, Vidyasagar University</p>
    </footer>
</body>
</html>