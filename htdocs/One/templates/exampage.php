<?php
    session_start();
    echo $_SESSION["a1"];
    echo $_SESSION["a2"];
    echo $_SESSION["a3"];
    echo $_SESSION["a4"];
    echo $_SESSION["a5"];
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
</head>

<body>
    <form action="../../process.php" method="post" name="question">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php
                include_once '../../database.php';

                $subject = $_SESSION['subject'];
                $sql = "SELECT * FROM ".$subject;
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row=$result->fetch_all();
                    echo $row[$_SESSION['i']][0].') '.$row[$_SESSION['i']][1].'<br>';
                    echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="A"> '.$row[$_SESSION['i']][2].'<br>';
                    echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="B"> '.$row[$_SESSION['i']][3].'<br>';
                    echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="C"> '.$row[$_SESSION['i']][4].'<br>';
                    echo '&emsp;<input type="radio" name="'.$row[$_SESSION['i']][0].'" value="D"> '.$row[$_SESSION['i']][5].'<br><br><br>';
                }

                $conn->close();
                ?>
            </div>
            <div class="col-md-4">
                Question Number<br>
                <button class='butt' onclick="go(1)" type="button">1</button>
                <button class='butt' onclick="go(2)" type="button">2</button>
                <button class='butt' onclick="go(3)" type="button">3</button>
                <button class='butt' onclick="go(4)" type="button">4</button>
                <button class='butt' onclick="go(5)" type="button">5</button><br><br><br><br>
                <input type="button" value="Previous" onclick="previous()">
                <input type="button" value="Next" onclick="next()">
                <input type="button" value="Clear" onclick="clr()">
                <input type="button" value="Save & Next" onclick="save()">
                <input type="submit" value="Final Submit" name="answer">
                </form>
            </div>
        </div>
    </div>

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

        function next(){
            $.ajax({
                url: "next.php",
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
    </script>
</body>

</html>