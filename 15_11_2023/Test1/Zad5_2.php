<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5_2</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "egzamin";
        $con = mysqli_connect($host, $user, $pass, $db);
        $nazw = $_POST["nazw"];
        $imie = $_POST["imie"];
        $ur = $_POST["ur"];
        $pol = "INSERT INTO `5c`(`Nazwisko`, `Imie`, `Dzien_urodzenia`) VALUES ('$nazw','$imie','$ur')";
        $wynik = mysqli_query($con, $pol);
    ?>
</body>
</html>