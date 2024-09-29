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
</head>
<body>

<?php
    setcookie("name", "Bryan", time() + 172800000);

$_SESSION['name'] = "Bryan";

?>



</body>
</html>