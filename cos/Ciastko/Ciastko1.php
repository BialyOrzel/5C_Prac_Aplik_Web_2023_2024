<?php
    $cookie_name = "user";
    $cookie_value = "Adrian Włodarczyk";// Modyfikacja "Włodarczyk Adrian"
    setcookie($cookie_name,$cookie_value, time()+ (60*60*24*30), "/");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciastko</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie name '". $cookie_name . "' is not set!";
        }else{
            echo "Cookie '". $cookie_name . "' is set!</br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>