<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        $x = 0;
        $a = 10;
        $b = 0;
        
        while ($x < 1000 && $b < 100) {
            $x += $a;
            $a++;
            $b++;
        }
        echo $x."</br>";
        echo $b;
    ?>
</body>
</html>