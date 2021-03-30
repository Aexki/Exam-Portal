<?php
session_start();
include_once 'database.php';

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $id = $_POST['id'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $collegeaddress = $_POST['collegeaddress'];
    $email = $_POST['email'];
    $branch = $_POST['branch'];
    $resume = $_FILES['resume']['tmp_name'];
    // $resume = base64_encode(file_get_contents(addslashes($resume)));
    $techskill = $_POST['techskill'];
    echo(count($techskill));
    $chk="";
    foreach($techskill as $chk1)
    {
        $chk .= $chk1.",";
    }
    $chk=chop($chk,",");

    $sql = "INSERT INTO `student` (`Name`, `ID`, `Password`, `Age`, `Email`, `Gender`, `College Address`, `Branch`, `Technical Skills`, `Resume`) VALUES ('$name','$id','$password','$age','$email','$gender','$collegeaddress','$branch','$chk','$resume')";

    if (mysqli_query($conn, $sql)) {
        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
            $uri = 'https://';
        } else {
            $uri = 'http://';
        }
        $uri .= $_SERVER['HTTP_HOST'];
        header('Location: '.$uri.'/one/templates/login.html');
        echo '<script type="text/javascript">';
        echo 'alert("User Created Successfully! Login to continue")';
        echo '</script>';
        mysqli_close($conn);
        exit;
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

if(isset($_POST['login'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `student` where name='$name' and password='$password'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) == 1) {
        echo "<script type='text/javascript'>
            var left = (screen.width/2)-100;
            var tops = (screen.height/2)-50;
            var w = window.open('', '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=200, height=100, top='+tops+', left='+left);
            w.document.write('Login Successful');
            w.focus();
            setTimeout(function() {
                w.close();
                window.open('/one/templates/index.html','_self');
            }, 1000);
        </script>";

        // if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        //     $uri = 'https://';
        // } else {
        //     $uri = 'http://';
        // }
        // $uri .= $_SERVER['HTTP_HOST'];
        // header('Location: '.$uri.'/one/templates/login.html');
    }
    else{
        $message = "Login Unsuccessful. Try again..";
        echo "<script type='text/javascript'>alert('$message');window.history.back();</script>";
    }
    mysqli_close($conn);
}

if(isset($_POST['answer']))
{
    $_SESSION['mark'] = 0;
    $_SESSION['correct'] = 0;
    $_SESSION['wrong'] = 0;
    include_once 'database.php';

    $sql = "SELECT * FROM ".$_SESSION['subject'];
    $result = $conn->query($sql);
    $row=$result->fetch_all();

    for($i=0;$i<5;$i++){
        $answer = $_SESSION['a'.($i+1)];
        if ($row[$i][6]==$answer) {
            $_SESSION['correct']+=1;
            $_SESSION['mark']+=1;
        }
        else {
            $_SESSION['wrong']+=1;
            $_SESSION['mark']+=0;
        }
    }

    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
    } else {
        $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
    header('Location: '.$uri.'/one/templates/result.php');
}

?>