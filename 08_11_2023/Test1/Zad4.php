<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <?php
        $a = 21;
        $b = 51;
        if($a > $b){
            echo "Liczba $a jest większa od liczby $b.";
        }elseif($a == $b){
            echo "Liczby są równe.";
        }else{
            echo "Liczba $b jest większa od liczby $a.";
        }
    ?>
</body>
</html>