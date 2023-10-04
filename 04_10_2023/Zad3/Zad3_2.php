<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba >= 100 && $liczba <=150){
            echo "Liczba $liczba mieści się w przedziale 100 - 150";
        }else{
            echo "Liczba $liczba nie mieści się w przedziale 100 - 150";
        }
    ?>
</body>
</html>