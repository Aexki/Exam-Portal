<?php
    session_start();
    // echo $_SESSION["a1"];
    // echo $_SESSION["a2"];
    // echo $_SESSION["a3"];
    // echo $_SESSION["a4"];
    // echo $_SESSION["a5"];
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam : <?php echo $_SESSION['title'];?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/exampage.css">
    <script src="../script/script.js"></script>
    <style>
        #clock {
            font-family: 'Share Tech Mono', monospace;
            color: black;
            text-align: center;
            color:white;
        }

        #clock .time {
            letter-spacing: 0.05em;
            font-size: 18px;
        }

        #clock .date {
            letter-spacing: 0.1em;
            font-size: 18px;
        }

        #clock .text {
            letter-spacing: 0.1em;
            font-size: 8px;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <label class="logo">Exam : <?php echo $_SESSION['title'];?></label>
        <ul>
            <div id="clock">
                <li><p class="time">Time Left : {{ time }}</p></li>
                <li><p class="date">{{ date }}</p></li>
            </div>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="question">
                    <h4>Question</h4>
                    <?php
                    include_once '../../database.php';

                    $subject = $_SESSION['subject'];
                    $sql = "SELECT * FROM ".$subject;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row=$result->fetch_all();
                        echo '<h5>'.$row[$_SESSION['i']][0].') '.$row[$_SESSION['i']][1].'</h5><br>';
                    }
                    $conn->close();
                    ?>

                    <div class="options">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="A" id="option1"><label for="option1"
                                class="box"><span class="circle"><b>A</b></span> '.$row[$_SESSION['i']][2].'</label>';
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="B" id="option2"><label for="option2"
                                class="box"><span class="circle"><b>B</b></span> '.$row[$_SESSION['i']][3].'</label>';
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="C" id="option3"><label for="option3"
                                class="box"><span class="circle"><b>C</b></b></span> '.$row[$_SESSION['i']][4].'</label>';
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="D" id="option4"><label for="option4"
                                class="box"><span class="circle"><b>D</b></span> '.$row[$_SESSION['i']][5].'</label>';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <input type="button" value="Previous Question" class="but"
                            style="background-color: blueviolet;" onclick="previous()">
                        <input type="button" value="Clear Response" class="but"
                            style="background-color: rgb(255, 56, 56);" onclick="clr()">
                        <input type="button" value="Save and Next" class="san" onclick="save()">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="changequestion">
                    <h4 style="color: #f30035;">Question Number</h4>
                    <div class="changequesbutton">
                        <button class='butt' onclick="go(1)" style="
                        <?php
                        if($_SESSION['a1'] == 0){
                            echo 'background-color:white'; }
                        else{
                            echo 'background-color:rgb(205, 235, 150)';
                        } ?>">1</button>
                        <button class='butt' onclick="go(2)" style="
                        <?php
                        if($_SESSION['a2'] == 0){
                            echo 'background-color:white'; }
                        else{
                            echo 'background-color:rgb(205, 235, 150)';
                        } ?>">2</button>
                        <button class='butt' onclick="go(3)" style="
                        <?php
                        if($_SESSION['a3'] == 0){
                            echo 'background-color:white'; }
                        else{
                            echo 'background-color:rgb(205, 235, 150)';
                        } ?>">3</button>
                        <button class='butt' onclick="go(4)" style="
                        <?php
                        if($_SESSION['a4'] == 0){
                            echo 'background-color:white'; }
                        else{
                            echo 'background-color:rgb(205, 235, 150)';
                        } ?>">4</button>
                        <button class='butt' onclick="go(5)" style="
                        <?php
                        if($_SESSION['a5'] == 0){
                            echo 'background-color:white'; }
                        else{
                            echo 'background-color:rgb(205, 235, 150)';
                        } ?>">5</button>
                    </div>
                    <input type="button" value="Final Submit" data-toggle="modal" data-target="#exampleModalCenter"
                        id="final">
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Final Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to Submit?
                                </div>
                                <div class="modal-footer">
                                <form action="../../process.php" method="post" name="question">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" id="endexam" class="btn btn-primary" value="Final Submit"
                                        name="answer">Submit</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        <?php
            if($_SESSION['a'.($_SESSION['i']+1)]!=0){
                echo "$(`input[name='". $_SESSION['i']+1 ."'][value='".$_SESSION['a'.($_SESSION['i']+1)]."']`).prop('checked', true);";
            }
        ?>
        function go(val){
            $.ajax({
                url: "go.php",
                method: "POST",
                data: { val : val },
                cache: false,
                success: function (response) {
                    if (response==''){}
                    else{
                        alert(response);
                    }
                    window.open('exampage.php','_self')
                }
            });
        }

        function save(){
            var ele = document.getElementsByName('<?php echo $_SESSION['i']+1 ?>');
            var option = 0;
            for(i = 0; i < ele.length; i++) {
                if(ele[i].checked)
                    var option = ele[i].value;
                // alert("Answer Marked: "+ele[i].value);
            }
            $.ajax({
                url: "save.php",
                method: "POST",
                data: {option : option},
                cache: false,
                success: function (response) {
                    if (response==''){}
                    else{
                        alert(response);
                    }
                    window.open('exampage.php','_self')
                }
            });
        }

        function clr(){
            var option = 0;
            $.ajax({
                url: "clear.php",
                method: "POST",
                data: {option : option},
                cache: false,
                success: function (response) {
                    if (response==''){}
                    else{
                        alert(response);
                    }
                    window.open('exampage.php','_self')
                }
            });
        }

        function previous(){
            $.ajax({
                url: "previous.php",
                method: "POST",
                data: {},
                cache: false,
                success: function (response) {
                    if (response==''){}
                    else{
                        alert(response);
                    }
                    window.open('exampage.php','_self')
                }
            });
        }

        console.clear();
        var clock = new Vue({
            el: '#clock',
            data: {
                time: '',
                date: ''
            }
        });

        var week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        var data = <?php echo $_SESSION['time']; ?>;
        var timerID = setInterval(updateTime, 1000);

        function updateTime() {
            var cd = new Date();
            tm = (Math.floor(data - cd.getTime() / 1000));
            if ((Math.floor(tm % 60) <= 0) && ((Math.floor(tm / 60)) <= 0) && (Math.floor(tm / 3600) <= 0)){
                alert('Time Over!');
                clearInterval(timerID);
                endexam();
            }
            clock.time = zeroPadding(Math.floor(tm / 3600), 2) + ':' + zeroPadding(Math.floor(tm / 60), 2) + ':' + zeroPadding(Math.floor(tm % 60), 2);
            clock.date = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth() + 1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
        };

        function zeroPadding(num, digit) {
            var zero = '';
            for (var i = 0; i < digit; i++) {
                zero += '0';
            }
            return (zero + num).slice(-digit);
        }

        function endexam(){
            document.getElementById('endexam').click();
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>