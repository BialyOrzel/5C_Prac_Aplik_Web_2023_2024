<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3_2</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        for($i = $x; $i <=$y; $i++){
            if($i % 3 == 0 && $i % 7 == 0){
            echo $i.", ";
            }
        }
    ?>
</body>
</html>