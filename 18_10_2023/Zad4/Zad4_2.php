<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4_2</title>
</head>
<body>
    <h1>Rekor w bazie danych został zmieniony</h1>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";
        $con = mysqli_connect($host, $user, $pass, $db);
        $ID = $_POST["ID"];
        $tytul = $_POST["tytul"];
        $rez = $_POST["rez"];
        $czas = $_POST["czas"];
        $pol = "UPDATE `filmy` SET `tytul`='$tytul',`rezyser`='$rez',`czas`='$czas' WHERE ID = '$ID'";
        $wynik = mysqli_query($con, $pol);
    ?>
    </table>
</body>
</html>