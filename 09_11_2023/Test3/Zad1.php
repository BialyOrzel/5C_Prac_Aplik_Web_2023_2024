<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        $x = 0;
        $a = 100;
        $b = 0;
        while ($b < 100) {
            if ($a % 2 === 0) {
                $x += $a;
                $b++;
            }
            $a++;
        }
        
        echo $x;
    ?>
</body>
</html>