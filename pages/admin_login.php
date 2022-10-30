<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidyasagar University | Dept.Of Computer Science|Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="content">
        
        <div class="login-box">
            <div class="heading">
                <h2>ADMIN LOG IN</h2>
            </div>
            
            <form action="../backend/adminlogin.php" method="post">
                <input type="text" name="id" placeholder="id" id="emailbox"><br>
                <input type="password" name="password" placeholder="password" id="passbox"><br>
                <button type="submit">Login</button>
            </form>
           
        </div>
    </div>
    <div class="exit">
        <a href="../index.php"><img src="../css/img/pngegg.png" alt=""></a>
    </div>
    <footer class="main-footer">
        <p class="main-footer_child">Copyright @ All Right Reserved 2022, Vidyasagar University</p>
    </footer>
</body>
</html>