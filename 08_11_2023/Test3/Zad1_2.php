<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <?php
    $zl = $_POST['pol'];
    $waluta = $_POST['waluta'];
    switch($waluta){
        case "eur":
            $w = $zl / 4.32;
            echo "$zl zł to $w euro.";
        break;
        case "usd":
            $w = $zl / 3.21;
            echo "$zl zł to $w dolarów.";
        break;
        case "frc":
            $w = $zl / 3.98;
            echo "$zl zł to $w franków.";
        break;
    }
    ?>
</body>
</html>