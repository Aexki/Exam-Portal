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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Exam Portal: Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../One/css/style.css">
    <script src="../One/script/script.js"></script>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <label for="check" class="checkbtnclose"><i class="fas fa-times"></i></label>
        <label class="logo">e-Exam: Register</label>
        <ul>
            <li><i class="fas fa-search icon"></i><input class="search-box" type="text" placeholder="Search... "
                    onfocus="placeholder=''" onblur="placeholder='Search...'"></li>
            <li><a href="../one/templates/index.html"><i class="fas fa-home"></i> Home</a></li>
            <li style="border-left: 3px solid white; height: 20px;" id="line1"></li>
            <li>
                <a href="#!"
                    onclick="$('#check').prop('checked', false);alert('Created and Developed by : Aman Jena\nThanks for visiting this page..')"><i
                        class="fas fa-project-diagram"></i> About Developer</a>
            </li>
        </ul>
    </nav>

    <div class="signup-form">
        <!-- <form action="../process.php" class="form-box" method="POST" enctype="multipart/form-data">
            <pre>
                Name      : <input type="text" id="v1" name="name" autocomplete="off" maxlength="25" readonly onfocus="this.removeAttribute('readonly');" class="direct" required>
                ID        : <input type="text" id="v2" name="id" autocomplete="off"  class="direct" required>
                Password  : <input type="password" id="v3" name="password" autocomplete="off" class="direct" required>
                Email     : <input type="email" id="v4" name="email" autocomplete="off" class="direct" required>
                Age       : <input type="number" id="v5" name="age" autocomplete="off" class="direct" min="18" max="23" required>
                Gender    : <input type="radio" name="gender" value="Male" checked> Male <input type="radio" name="gender" value="Female"> Female <input type="radio" name="gender" value="Others"> Others
                College Address :
                <textarea name="collegeaddress" id="v6" id="collegeaddress" cols="41" rows="3" spellcheck="False" required></textarea>
                Branch    : <select name="branch" id="branch" required>
                    <option value="" disabled selected></option>
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="ECE">ECE</option>
                    <option value="EIE">EIE</option>
                </select>
                Technical Skills : <input type="checkbox" name="techskill[]" value="Python"> Python <input type="checkbox" name="techskill[]" value="C"> C <input type="checkbox" name="techskill[]" value="Java"> Java <input type="checkbox" name="techskill[]" name="JSP"> JSP
                Resume(upload): <input type="file" class="fileinput" id="v7" name="resume">
                <input type="submit" name="save" value="Submit" class='butt' onclick="check()">  <input type="reset" value="Reset" class="butt">
            </pre>
        </form> -->
        <form action="../process.php" class="form-box" method="POST" enctype="multipart/form-data">
            <div class="container">
                <h1 style="text-align: center;">Register</h1>
                <p style="text-align: center;">Please fill in this form to create an account.</p>
                <hr>

                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="name" required><br>

                <div>
                    <label for="ID"><b>ID</b></label>
                    <input type="text" placeholder="Enter ID" name="id" id="ID" required><br>
                </div>

                <div>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" id="psw" required>
                </div>
                <div>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>
                </div>
                <div>
                    <label for="age"><b>Age</b></label>
                    <input type="text" placeholder="Enter Age" name="age" id="age" required><br>
                </div>
                <div>
                    <label for="collgadd"><b>College Address</b></label>
                    <textarea id="collgadd" name="collegeaddress" rows="1" cols="50"
                        placeholder="Enter college address"></textarea><br>
                </div>

                <label for="branch"><b>Branch</b></label>
                <div class="dropdown">
                    <select name="branch" id="branch">
                        <option value="" selected disabled>Select your branch</option>
                        <option value="CSE">Computer Science and Engineering</option>
                        <option value="IT">Information Technology</option>
                        <option value="EEE">Electrical and Electronics Engineering</option>
                        <option value="ECE">Electronics and Communication Engineering</option>
                        <option value="CE">Computer Engineering</option>
                        <option value="CIV">Civil Engineering</option>
                        <option value="ME">Mechanical Engineering</option>
                        <option value="BT">BioTechnology</option>
                        <option value="CHE">Chemical Engineering</option>
                        <option value="AE">Automobile Engineering</option>
                        <select><br>
                </div>

                <div style="padding-top: 15px; padding-bottom: 15px;">
                    <label for="gender"><b>Select your gender</b></label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br>
                </div>

                <div style="padding-top: 15px; padding-bottom: 15px;">
                    <label for="technicalskills"><b>Technical Skills</b></label><br>
                    <input type="checkbox" id="skill1" name="techskill[]" value="c">
                    <label for="skill1">C</label>
                    <input type="checkbox" id="skill2" name="techskill[]" value="cpp">
                    <label for="skill2">C++</label>
                    <input type="checkbox" id="skill3" name="techskill[]" value="java">
                    <label for="skill3">Java</label>
                    <input type="checkbox" id="skill4" name="techskill[]" value="python">
                    <label for="skill4">Python</label>
                    <input type="checkbox" id="skill5" name="techskill[]" value="html">
                    <label for="skill5">HTML</label>
                    <input type="checkbox" id="skill6" name="techskill[]" value="css">
                    <label for="skill6">CSS</label>
                    <input type="checkbox" id="skill7" name="techskill[]" value="js">
                    <label for="skill7">Java Script</label><br>
                </div>

                <div style="padding-top: 15px; padding-bottom: 15px;">
                    <label for="myresume"><b>Upload your resume</b></label>
                    <input type="file" id="myresume" name="resume" value="select resume"><br><br>
                </div>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" class="registerbtn" name="save" onclick="">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="../One/templates/login.php">Sign in</a>.</p>
            </div>
        </form>
    </div>

    <div class="footer">
        <ul style="list-style-type: none; display:inline">
            <li style="display: inline;" class="option">PRIVACY POLICY</li>
            <li style="display: inline;" class="option">COPYRIGHT POLICY</li>
            <li style="display: inline;" class="option">DISCLAIMER</li>
            <li style="display: inline;" class="option">ABOUT US</li>
            <li style="display: inline;" class="option">CONTACT</li>
            <li style="float:right" class="mymark">&#169; Aexki Creation. All Rights Reserved. | 2001 - 2021</li>
        </ul>
    </div>
</body>

</html>