<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <?php
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        if($liczba1 % $liczba2 == 0){
            echo "Liczba $liczba1 jest podzielna bez reszty przez liczbę $liczba2";
        }else{
            echo "Liczba $liczba1 nie jest podzielna bez reszty przez liczbę $liczba2";
        }
    ?>
</body>
</html>