<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <h2 style="text-align: center; margin-top: 40px;">Login Form</h2>
    <div class="container">
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

            <div class="psw" style="background-color:#f1f1f1">
                <span>Forgot <a href="#" style="color:red; text-decoration:none;">username/password </a>?</span><br><br>
                <span>Don't have an account? <a href="../../Two/register.html"
                        style="color:red; text-decoration:none;">Sign Up
                    </a>now.</span>
            </div>
        </form>