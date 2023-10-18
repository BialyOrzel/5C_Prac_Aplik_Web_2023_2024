<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <h1>Utworzono nowy rekord w bazie danych.</h1>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";
        $con = mysqli_connect($host, $user, $pass, $db);
        $tytul = $_POST["tytul"];
        $rez = $_POST["rez"];
        $czas = $_POST["czas"];
        $pol = "INSERT INTO `filmy`(`tytul`, `rezyser`, `czas`) VALUES ('$tytul','$rez','$czas')";
        $wynik = mysqli_query($con, $pol);
    ?>
</body>
</html>