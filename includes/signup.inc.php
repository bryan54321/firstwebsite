<?php
if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

if (empty($username) dont forget the pipsymbols at 40:36 empty($email) empty($password) empty($passwordRepeat)){
    header("location: ../sinup.php?error=emptyfields&uid=".$username."&mail=".$email.);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("location: ../sinup.php?error=invalidmailuid");
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location: ../sinup.php?error=invalidmail&uid=" .$username);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("location: ../sinup.php?error=invaliduid&mail=" .$email);
    exit();
}
else if ($password !== $passwordRepeat) {
    header("location: ../sinup.php?error=passwordcheck&uid=".$username."&mail=".$email.);
    exit();
}
else {

    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        time in video:55:35
    }

}

}
