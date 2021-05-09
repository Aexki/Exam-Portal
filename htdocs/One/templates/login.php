<?php
    session_start();
    if(isset($_SESSION['user'])){
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }
        $uri .= $_SERVER['HTTP_HOST'];
        header('Location: '.$uri.'/one/templates/index.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <label for="check" class="checkbtnclose"><i class="fas fa-times"></i></label>
        <label class="logo">e-Exam - Login</label>
        <ul>
            <li><i class="fas fa-search icon"></i><input class="search-box" type="text" placeholder="Search... "
                    onfocus="placeholder=''" onblur="placeholder='Search...'"></li>
            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
            <li style="border-left: 3px solid white; height: 20px;" id="line1"></li>
            <li>
                <a href="#!"
                    onclick="$('#check').prop('checked', false);alert('Created and Developed by : Aman Jena\nThanks for visiting this page..')"><i
                        class="fas fa-project-diagram"></i> About Developer</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h2 style="text-align: center; margin-top: 40px;">Login Form</h2></center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <img src="../images/2.png" alt="" id="stud">
            </div>
            <div class="col-md-5">
                <form action="../../process.php" method="post">
                    <div class="imgcontainer">
                        <img src="../images/loginuser.png" alt="user" class="user">
                    </div>
                    <div>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required><br>

                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        <button type="submit" name="login">Login</button>
                    </div>

                    <div class="psw">
                        <span>Forgot <a href="#" style="color:red; text-decoration:none;">username/password </a>?</span><br><br>
                        <span>Don't have an account? <a href="../../Two/register.php"
                                style="color:red; text-decoration:none;">Sign Up
                            </a>now.</span>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>