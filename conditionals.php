<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $x = 4;

        if ($x == 1){
            echo "tennis is very fun";
        } 
        elseif  ($x == 2){
            echo "tennis sucks";
        }
        elseif ($x == 3) {
            echo "tennis is a very difficult sport";
        }
        elseif ($x == 4) {
            echo "i am good at tennis";
        }
        else {
            echo "ive never played tennis";
        }
    ?>

        <h1>     </h1>

<?php


    <?php
    $x = 8;

    switch ($x){
        case 1;
            echo "coding is difficult";
        break;
        case 2;
            echo "coding is interesting";
        break;
        case 3;
            echo "coding is time consuming";
        break;
        case 4;
            echo "coding is hard";
        break;
        default:
            echo "coding is fun";
    }

?>
</body>
</html>