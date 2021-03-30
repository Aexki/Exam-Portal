<?php
    session_start();
    echo 'Correct Answer marks : '.$_SESSION['correct'].' * 1 = '.$_SESSION['correct'].'<br>';
    echo 'Wrong Answer marks : '.$_SESSION['wrong'].' * 1 = '.$_SESSION['wrong'].'<br>';
    echo 'Mark scored : '.$_SESSION['mark'];
?>

