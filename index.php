<?php
    include 'includes/header.php';
    include_once 'includes/connection.php';
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

<form method="GET">
    <input type= "text" name= "person">
    <button>SUBMIT</button>
</form>

<?php
  $name = $_GET['person'];
  echo $name. " is a handsome fellow!";
?>
<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row ['username'] . "<br>";
        }
    }
?>

<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="firstname">
    <br>
    <input type="text" name="last" placeholder="lastname">
    <br>
    <input type="text" name="email" placeholder="e-mail">
    <br>
    <input type="text" name="uid" placeholder="username">
    <br>
    <input type="password" name="pwd" placeholder="password">
    <br>
    <button type="submit" name="submit">sign up</button>
</form>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
?>







<?php
  require "header.php";
?>

<main>
    <p>you are logged out!</p>
    <p>you are logged in!</p>
</main>

<?php
    require "footer.php";
?>

</body?>