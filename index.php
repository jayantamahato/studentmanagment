<?php
include'backend/config.php';
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
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

</head>
<body>
<?php
include'nav.php';
?>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="css/img/Vidyasagar_University_Image.jpg" class="d-block w-100" alt="image 1">
            </div>
            <div class="carousel-item">
                <img src="css/img/vidyasagar_university_logo.jpeg" class="d-block w-100" alt="image 2">
            </div>
            <div class="carousel-item">
                <img src="css/img/The_main_Entrance_of_Vidyasagar_University.png" class="d-block w-100" alt="image 3">
            </div>
        </div>
    </div>
    <div class="content">
        <div class="header">
            <div class="heading1">

                <h4>
                    University Life<br>
                </h4>
                Overall in here

            </div>
            <div class="heading2">

                <h4>
                    Graduation<br>
                </h4>
                Getting Diploma
            </div>
            <div class="heading3">

                <h4>
                    Athletics<br>
                </h4>
                Sport Clubs
            </div>
            <div class="heading4">
                <h4>
                    Social<br>
                </h4>
                Overall in here

            </div>
        </div>
        <div class="cardx">
            <div class="card-item">
                <div class="card-image">
                    <img src="css/img/group_pic.jpeg" alt="">
                </div>
                <div class="card-content">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur eius nesciunt repellendus
                        distinctio aut reiciendis placeat enim iure minima corporis, alias sequi rerum hic a illum cum
                        doloribus ipsum id odio officiis laboriosam! Dolores nam fugit, numquam totam voluptates
                        provident
                        beatae dicta delectus dolor atque iusto natus eligendi ad quae.</p>
                    <a href="pages/register.php"><button>Sign Up</button></a>
                </div>
            </div>


        </div>
    </div>
    <div class="about-content">
        <div class="l-content">
            <h3>Vidyasagar University</h3>
            <h4>About Our University</h4>
        </div>
        <div class="r-content">
            <p>We are one of the largest, most diverse universities in the USA with over 90,000 students in USA, and a
                further 30,000 studying across 180 countries for Kingster University.

                Kingster University was established by John Smith in 1920 for the public benefit and it is recognized
                globally. Throughout our great history, Kingster has offered access to a wide range of academic
                opportunities. As a world leader in higher education, the University has pioneered change in the sector.
            </p>
        </div>
    </div>
    <div class="detail-card">
        <div class="e-service">
            <h4>
                Education Service
            </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis provident porro a voluptatum, aperiam sed
                animi eius odio distinctio quam!</p>
        </div>
        <div class="fest">
            <h4>
                Feast
            </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis provident porro a voluptatum, aperiam sed
                animi eius odio distinctio quam!</p>
        </div>
        <div class="labs">
            <h4>
                Labs
            </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis provident porro a voluptatum, aperiam sed
                animi eius odio distinctio quam!</p>
        </div>
        <div class="degree">
            <h4>
                M.Sc | M.C.A
            </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis provident porro a voluptatum, aperiam sed
                animi eius odio distinctio quam!</p>
        </div>
    </div>
    <iframe src="https://www.youtube.com/embed/nFCiFHeBNzs" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    <div class="notice-card">
       <div class="notice-heading">
           <h5>Recent Notices</h5>
       </div>
       <div class="notice"> 
                
            <div class="notice_card card">
            
              
                <?php
                $query ="SELECT*FROM `notice`";
                 $run=mysqli_query($conn,$query)or die("connection failed");
                while($fetch=mysqli_fetch_assoc($run))
                {
                ?> 
                <div class="nbody">
                    <div class="ndate">
                    <?php echo $fetch['publishdate'];?>
                    </div>
                    <div class="ntitle">
                    <?php echo $fetch['title'];?>
                    </div>
                    <div class="ntopic">
                    <?php echo $fetch['topic'];?>
                        <br>
                    </div>
                    <div class="file">
                    <a href="<?php echo $fetch['noticefile'];?>" download="<?php echo $fetch['noticeid'];?>">download</a>
                    </div>
                </div>
                <?php           
                }
                ?>
                         
            </div>              
        </div>     
    </div>

    <div class="artical">
        <div class="artical-child bg1">
            <h4 class="artical-child-heading">Undergraduate</h4>
            <p class="artical-child-content">The University was established on 29th September 1981 by an Act called the
                Vidyasagar
                University Act 1981 (West Bengal Act XVIII of 1981).</p>
        </div>
        <div class="artical-child bg2">
            <h4 class="artical-child-heading">Graduate & Proffesional</h4>
            <p class="artical-child-content">The University was established on 29th September 1981 by an Act called the
                Vidyasagar
                University Act 1981 (West Bengal Act XVIII of 1981).</p>
        </div>
        <div class="artical-child bg3">
            <h4 class="artical-child-heading">Scholarships & Financial AID</h4>
            <p class="artical-child-content">The University was established on 29th September 1981 by an Act called the
                Vidyasagar
                University Act 1981 (West Bengal Act XVIII of 1981).</p>
        </div>
    </div>
    <div class="mid-section">
        <div class="mid-section-child">
            <img class="img_class" src="css/img/dr biswapati jana.jpg" alt="#">
            <h3 class="mid-section-heading">Donation Help Us</h3>
            <p>The Campaign for the Vidyasagar University is the <strong> largest fundraising campaign in West Bengal
                </strong>. With a historic
                $1 billion goal, the campaign is expanding U of T’s global leadership capacity.</p>

            <a href="#"><button class="button-class">Became a Donar</button></a>
        </div>

        <div class="mid-section-child bg5">
            <h3 class="mid-section-heading">Upcoming Event</h3>
            <?php
                $query ="SELECT*FROM `event`";
                 $run=mysqli_query($conn,$query)or die("connection failed");
                while($fetch=mysqli_fetch_assoc($run))
                {
                ?> 
            <div class="event">
                <h4><?php echo  $fetch['title'];?></h4>
                <?php echo  $fetch['topic'];?>
              
            </div>
            <?php
            }
            ?>

        </div>

        <div class="mid-section-child bg4">
            <h3 class="bg-heading">Subscribe to University</h3>
            <div class="bg-form">
                <form action="#" method="post">
                    <input type="text" name="Email" id="mail-box" placeholder="Enter your Email" required>
                    <input type="submit" value="Subscribe" id="submit-box">
                </form>
            </div>

        </div>

    </div>

    <div class="mid-container">
        <section class="rg-form">
            <h3 class="rg-form-heading">Search for Course</h3>
            <form action=".php" method="post">
                <input class="box-class" type="text" name="keywords" id="key" placeholder="Keywords" required>
                <input class="box-class" type="text" name="courseid" id="course" placeholder="Course Id" required> <br>
                <select class="box-class" name="dname" id="dname">
                    <option value="department">Department</option>
                    <option value="mca">MCA</option>
                    <option value="msc">MSC</option>
                    <option value="mathematics">MATHEMATICS</option>
                    <option value="biology">BIOLOGY</option>
                    <option value="history">HISTORY</option>
                </select>
                <select class="box-class" name="campus" id="cpus">
                    <option value="cumpus">Cumpus</option>
                    <option value="Administration Building">Administration Building</option>
                    <option value="Science Building">Science Building</option>
                    <option value="Science Building">Central Library</option>
                    <option value="Humanities Building">Humanities Building</option>
                    <option value="Women Infrastructure">Women Infrastructure</option>
                    <option value="P.G Boys hostel">P.G Boys hostel</option>
                    <option value="Tribal Culture Bulding">Tribal Culture Bulding</option>
                </select><br>
                <select class="box-class" name="lebel" id="lebel">
                    <option value="Lebel">Lebel</option>
                    <option value="Lebel">Post Graduate</option>
                    <option value="Lebel">Under Graduate</option>
                </select>
                <select class="box-class" name="instructor" id="ist">
                    <option value="Instructor">Instructor</option>
                    <option value="Dr. Biswapati Jana(phd)">Dr. Biswapati Jana(phd)</option>
                    <option value="Dr. Utpal Nandi(phd)">Dr. Utpal Nandi(phd)</option>
                    <option value="Dr. Uttam Kumar(phd)">Dr. Uttam Kumar(phd)</option>
                    <option value="Dr. Partha Saha(phd)">Dr. Partha Saha(phd)</option>
                </select><br>
                <select class="box-class" name="semester" id="sname">
                    <option value="Semester">Semester</option>
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                    <option value="Third">Third</option>
                </select>
                <select class="box-class" name="credit" id="credit">
                    <option value="Credit">Credit</option>
                    <option value="2.000">2.000</option>
                    <option value="3.000">3.000</option>
                    <option value="4.000">4.000</option>
                </select><br>
                <input class="submit_box" type="Submit" value="Search Courses">
            </form>
        </section>
    </div>
    <div class="navbar_containt">
        <span><a class="li_class" href="#">Feedback</a></span>
        <span><a class="li_class" href="#"> Susstion for Website</a></span>
        <span><a class="li_class" href="#">Disclaimer</a> </span>
        <span><a class="li_class" href="#">Online Payment Service</a> </span>
        <span><a class="li_class" href="#">Contact Us</a> </span>
    </div>
    <div class="footer-block">
        <div class="footer-block1">
            <img src="css/img/Vidyasagar_University_Logo.svg.png" class="logo logo2" alt="#">
            <span class="campus-class campus2">Vidyasagar University</span>
            <ul class="ul-class">
                <li><a href="pages/admin_login.php" style="color:white;text-decoration:none;">Admin Log In</a></li><br>
                <li> Vidyasagar University Rd, Rangamati</li><br>
                <li> Midnapore, West Bengal </li><br>
                <li> 721102</li><br>
                <li> 03222 276 554 </li><br>
            </ul>
        </div>
        <div class="footer-block1">
            <h4 class="campus-class">Our Campus</h4>
            <ul class="ul-class">
                <li> <a href="#" class="a-class">Acedemic</a></li><br>
                <li> <a href="#" class="a-class">Planning & Administration</a></li><br>
                <li> <a href="#" class="a-class">Campus Safety </a></li><br>
                <li> <a href="#" class="a-class">Office of The Chancellor</a></li><br>
                <li> <a href="#" class="a-class">Facility Services </a></li><br>
                <li> <a href="#" class="a-class">Human Resources </a></li><br>

            </ul>
        </div>
        <div class="footer-block1">
            <h4 class="campus-class">Campus Life</h4>
            <ul class="ul-class">
                <li> <a href="#" class="a-class">Accessibility</a></li><br>
                <li> <a href="#" class="a-class">Financial Aid</a></li><br>
                <li> <a href="#" class="a-class">Food Service</a></li><br>
                <li> <a href="#" class="a-class">Housing</a></li><br>
                <li> <a href="#" class="a-class">Information Technology</a></li><br>
                <li> <a href="#" class="a-class">Student Life</a></li><br>
            </ul>
        </div>
        <div class="footer-block1">
            <h4 class="campus-class">Academic</h4>
            <ul class="ul-class">
                <li> <a href="#" class="a-class">Canvas</a></li><br>
                <li> <a href="#" class="a-class">Catalyst</a></li><br>
                <li> <a href="#" class="a-class">Library</a></li><br>
                <li> <a href="#" class="a-class">Time Schedule</a></li><br>
                <li> <a href="#" class="a-class">Apply For Admissions</a></li><br>
                <li> <a href="#" class="a-class">Pay My Tution Fees</a></li><br>
            </ul>
        </div>

    </div>
    <footer class="main-footer">
        <p class="main-footer_child">Copyright @ All Right Reserved 2022, Vidyasagar University</p>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            </body>

</html>