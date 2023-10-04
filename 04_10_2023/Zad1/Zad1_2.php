<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba % 2 == 0){
            echo "Liczba $liczba jest parzysta";
        }else{
            echo "Liczba $liczba jest nieparzysta";
        }
    ?>
</body>
</html>