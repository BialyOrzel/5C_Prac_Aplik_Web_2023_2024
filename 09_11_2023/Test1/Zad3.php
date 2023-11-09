<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
    <?php
        echo "Pętla for<br>";
        for($x = 100; $x >= 80 ; $x--){
            if($x % 5 == 0){
                echo $x."</br>";
            }
        }
    ?>
    <?php
        echo "Pętla while<br>";
        $x = 100;
        while($x >=80){
            if($x % 5 == 0){
            echo $x."</br>";
            }
            $x--;
        }
    ?>
    <?php
        echo "Pętla do...while<br>";
        $x = 100;
        do{
            if($x % 5 == 0){
                echo $x."</br>";
            }
            $x--;
        }while($x >=80);
    ?>
</body>
</html>