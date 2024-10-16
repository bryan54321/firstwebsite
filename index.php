<?php
    include 'includes/header.php';
    include_once 'includes/dbh.inc.php';
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
?>

<main>
    

    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p>you are logged out!</p>';
        }
        
    else{
        echo '<p>you are logged in!</p>';
    }
    ?>
</main>

</body?>