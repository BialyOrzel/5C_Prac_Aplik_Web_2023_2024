<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['user'])){
            echo "Value is: " . $_COOKIE['user'];
        }
    ?>
</body>
</html>