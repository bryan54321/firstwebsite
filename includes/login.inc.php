<?php

if (isset($_POST['login-submit'])) {

    require 'dbg.inc,php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid || empty($password))){
        header("location: ../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE uidUsers=?" 1;22;56 time
    }
}
else{
    header("location: ../index.php");
    exit();
}