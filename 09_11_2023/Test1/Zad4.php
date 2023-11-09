<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
</head>
<body>
    <?php
        echo "Pętla for<br>";
        for($x = 1; $x <=10; $x++){
            echo $x."</br>";
            $w = sqrt($x);
            echo $w."</br>";
        }
    ?>
    <?php
        echo "Pętla while<br>";
        $x = 1;
        while($x <=10){
            echo $x."</br>";
            $w = sqrt($x);
            echo $w."</br>";
            $x++;
        }
    ?>
    <?php
        echo "Pętla do...while<br>";
        $x = 1;
        do{
            echo $x."</br>";
            $w = sqrt($x);
            echo $w."</br>";
            $x++;
        }while($x <=10);
    ?>
</body>
</html>
</body>
</html>