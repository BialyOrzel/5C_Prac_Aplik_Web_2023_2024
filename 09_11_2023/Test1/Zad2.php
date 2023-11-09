<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2</title>
</head>
<body>
    <?php
        echo "Pętla for<br>";
        for($x = 100; $x >=91; $x--){
            echo $x."</br>";
        }
    ?>
    <?php
        echo "Pętla while<br>";
        $x = 100;
        while($x >=91){
            echo $x."</br>";
            $x--;
        }
    ?>
    <?php
        echo "Pętla do...while<br>";
        $x = 100;
        do{
            echo $x."</br>";
            $x--;
        }while($x >=91);
    ?>
</body>
</html>