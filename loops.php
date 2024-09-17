<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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