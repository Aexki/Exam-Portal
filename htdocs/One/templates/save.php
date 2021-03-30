<?php
    session_start();
    $_SESSION['a'.($_SESSION['i']+1)] = $_POST['option'];
    $_SESSION['i'] += 1;
    if($_SESSION['i']>4){
        $_SESSION['i'] = 0;
    }
?>