<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        $a = 16;
        if($a < 0){
            echo "Nie można obliczyć pierwiastka z liczby ujemnej";
        }else{
            $w = sqrt($a);
            echo "Pierwiastek kwadratowy z liczby $a to $w.";
        }
    ?>
</body>
</html>