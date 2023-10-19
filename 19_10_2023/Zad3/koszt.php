<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kolory</title>
</head>
<body>
    <?php
        $koszt =$_POST["koszt"];
        $km = $_POST["km"];
        $spa = $_POST["spa"];
        $cena = $koszt * ($spa * $km/100);
        echo "Koszt benzyny: $koszt zł/L</br>";
        echo "Ilość kilometrów: $km km</br>";
        echo "Średnie salanie: $spa L/100km</br>";
        echo "Koszt przejazdu wyniósł: $cena zł";
    ?>
</body>
</html>