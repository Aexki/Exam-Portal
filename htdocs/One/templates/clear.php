<?php
    session_start();
    $_SESSION['a'.($_SESSION['i']+1)] = $_POST['option'];
?>