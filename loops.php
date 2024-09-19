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
    //While loop
    $x = 1;
    while ($x <= 5) {
        echo "Coach B is a good Teacher<br>";
        $x++;
    }
?>
<br>
<?php
    //Do while loop
    $x = 1;
    do {
        echo "he makes coding fun<br>";
        $x++;
    }
    while ($x <= 5);
?>
<br>
<?php
    //For loop
    for ($x = 1; $x <= 10; $x++) {
        echo "Hows your day been? <br>";
    }


?>
<br>
<?php
    //Foreach loop
    $array = array ("good", "bad", "okay");

    foreach ($array as $loopdata) {
        echo "My day has been ".$loopdata. "<br>";
    }

?>

</body>
</html>