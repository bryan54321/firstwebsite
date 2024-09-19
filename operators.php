<?php
    include 'includes/header.php';
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




<?php
    //Arithmetic Operators
    echo 5**2;
?>

<?php
    //Assignment Operators
    $x = 100;
    $x += 20;
    echo $x;
?>

<?php
    //Comparison Operators
    $x = 10;
    $y = 10;

    if($x <> $y) {
        echo "True!";
    }

    else {
        echo "False!";
    }
?>

<?php
    //Increment/Decrement Operators
    $x = 10 ;
    echo $x--;
    echo $x;
?>

<?php
    //Logical Operators
    $x = 20;
    $y = 20;

    if ($x == $y && 1 == 1) {
        echo "True";
    }
?>

</body>
</html>