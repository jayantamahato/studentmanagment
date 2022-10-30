<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<style>
* {
    margin: 0px;
    padding: 0px;
}
body {
    font-family: Arial, Helvetica, sans-serif;
}

::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #ffffff;
}

::-webkit-scrollbar-thumb {
    background: rgb(14, 12, 49);
}
.navbar {
    position: fixed;
    z-index: 3;
    width: 100%;
    box-shadow: 1px 1px 9px black;
}
.container-fluid img 
{
    height: 60px;
    width: 60px;
}
.navbar>.container-fluid >.dept{
width: 320px;
height: 52px;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
}
.navbar>.container-fluid >.dept h6,p{
    margin:0px;
}
.navbar>.container-fluid >.dept h6{
   font-size: 20px;
}
.navbar>.container-fluid >.dept p{
    font-size: 15px;
}
.collapse
{
    height: 60px;
}
.navbar-nav {
    height: 52px;
    margin-left: 380px;
}
.nav-link:hover {
    border-bottom: 2px solid rgb(14, 12, 49);
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="../css/img/Vidyasagar_University_Logo.svg.png" class="logo" alt="">
            <div class="dept">
                <h6>Departmet Of Computer Sciece</h6>
                <p>Vidyasagar Uiversity</p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="all_faculty_member.php">Faculty Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="nts.php">Non Teaching Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="all_schollor.php">PhD Scholar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="studentdash.php">Account</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>
 </html>