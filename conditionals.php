<?php
    include 'includes/header.php';
?>
<?php
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