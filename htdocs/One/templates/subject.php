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
    <title>e-Exam Portal: Exam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../script/script.js"></script>
</head>

<body>
    <nav class="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
        <label for="check" class="checkbtnclose"><i class="fas fa-times"></i></label>
        <label class="logo">e-Exam - Subjects</label>
        <ul>
            <li><i class="fas fa-search icon"></i><input class="search-box" type="text" placeholder="Search... "
                    onfocus="placeholder=''" onblur="placeholder='Search...'"></li>
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
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

    <div class="container detail">
        <fieldset>
        <legend>My Exams</legend>
        <table class="table table-bordered table-hover" style="text-align: center;">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">EXAM</th>
                <th scope="col">MARK</th>
                <th scope="col">DURATION</th>
                <th scope="col">DATE</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                include '../../database.php';

                $sql = "SELECT * FROM exam_subjects";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<th scope="row">'.$row['#'].'</th>';
                        echo '<td>'.$row['exam'].'</td>';
                        echo '<td>'.$row['mark'].'</td>';
                        echo '<td>'.$row['duration'].'</td>';
                        echo '<td>'.$row['time_date'].'</td>';
                        echo '<td><button id ="'.$row['exam'].'"name="'.$row['duration'].'" value="'.$row['value'].'" class="btn btn-primary" onclick="data(this.value,this.id,this.name)">Appear</button></td>';
                        echo '</tr>';
                    }
                }
            ?>
            </tbody>
        </table>
        </fieldset>
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

    <script>
        function data(subject, title, duration) {
            var giv = new Date();
            var a = duration.split(':');
            var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);

            var examtime = seconds;

            var data = (giv.getTime() / 1000) + examtime;
            $.ajax({
                url: "set_session.php",
                method: "POST",
                data: { title : title, subject : subject, time : data },
                cache: false,
                success: function (response) {
                    window.open('exampage.php')
                }
            });
        }
    </script>
</body>

</html>