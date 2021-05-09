<?php
    session_start();
    if(!$_SESSION['user']){
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }
        $uri .= $_SERVER['HTTP_HOST'];
        header('Location: '.$uri.'/one/templates/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Exam Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../script/script.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <img src="../images/Online-Exam-Portal.jpeg" alt="ksldfjls" id="bg">
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <label for="check" class="checkbtnclose"><i class="fas fa-times"></i></label>
        <label class="logo">e-Exam Portal</label>
        <ul>
            <li><i class="fas fa-search icon"></i><input class="search-box" type="text" placeholder="Search... "
                    onfocus="placeholder=''" onblur="placeholder='Search...'"></li>
            <li><a href="" class="active"><i class="fas fa-home"></i> Home</a></li>
            <li style="border-left: 3px solid white; height: 20px;" id="line1"></li>
            <li class="dropdown">
                <a href="#!" class="dropbtn"
                    ><i class="fas fa-user" style="color: white"></i>
                    <?php echo ' '.$_SESSION['user']; ?>
                </a>
                <div class="dropdown-content">
                    <a href="#" onclick="logout()">Logout</a>
                    <a href="#!" onclick="$('#check').prop('checked', false);alert('Created and Developed by : Aman Jena\nThanks for visiting this page..')">About Developer</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container-fluid widgets">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <!-- First row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 440px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../images/e-Exam.jpg" alt="e-Exam">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">e-Exam</h5>
                                        <p class="card-text">Access the question paper and appear the exam here.</p>
                                        <a href="subject.php"><button>Go here</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 440px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../images/openforum.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Open Forum</h5>
                                        <p class="card-text">Post your questions and get answers to your questions.</p>
                                        <a href="openforum.html"><button>Go here</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <!-- Second row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 440px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../images/e-Repository.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">e-Repository</h5>
                                        <p class="card-text">Share the documents and files with everyone here.</p>
                                        <a href="erepo.html"><button>Go here</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 440px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../images/mywall.jpg" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">My Wall</h5>
                                        <p class="card-text">Access your profile and make changes here.</p>
                                        <a href="mywall.html"><button>Go here</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <ul style="list-style-type: none; display:inline">
            <li style="display: inline;" class="option">PRIVACY POLICY</li>
            <li style="display: inline;" class="option">COPYRIGHT POLICY</li>
            <li style="display: inline;" class="option">DISCLAIMER</li>
            <li style="display: inline;" class="option">ABOUT US</li>
            <li style="display: inline;" class="option">CONTACT</li>
            <li style="float:right" class="mymark">&#169; <span style="cursor: pointer;">Aexki</span> Creation. All
                Rights Reserved. | 2001 -
                2021</li>
        </ul>
    </div>
</body>

</html>