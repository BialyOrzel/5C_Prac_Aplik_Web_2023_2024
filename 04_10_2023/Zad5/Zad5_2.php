<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5_2</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba < 11){
            echo "Dziecko";
        }elseif($liczba >= 11 && $liczba <= 17){
            echo "Nastolatek";
        }else{
            echo "Dorosły";
        }
    ?>
</body>
</html>