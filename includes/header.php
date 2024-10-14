<?php
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">index</a>
                <a class="nav-link" href="arrays.php">arrays</a>
                <a class="nav-link" href="calculator.php">calculator</a>
                <a class="nav-link" href="calendar.php">calendar</a>
                <a class="nav-link" href="conditionals.php">conditionals</a>
                <a class="nav-link" href="datatypes.php">datatypes</a>
                <a class="nav-link" href="function.php">functions</a>
                <a class="nav-link" href="loops.php">loops</a>
                <a class="nav-link" href="operators.php">operators</a>
                <a class="nav-link" href="superglobals.php">superglobals</a>
            </div>
            </div>
        </div>
        <div>
            <form action = "includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="username/E-mail...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action = "includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">logout</button>
            </form>
        </div>
        </nav>

        <?php
            $_SESSION ['username'] = "Bryan Dominguez";
            echo $_SESSION ['username'];
            if (!isset($_SESSION['username'])){
                echo " You are not logged in.";
            } else{
                echo " You are logged in.";
            }


        ?>

    </header>

</body>
</html>