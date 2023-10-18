<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3_2</title>
</head>
<body>
    <h1>Rekor w bazie danych został usunięty</h1>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";
        $con = mysqli_connect($host, $user, $pass, $db);
        $tytul = $_POST["tytul"];
        $pol = "DELETE FROM `filmy` WHERE tytul = '$tytul'";
        $wynik = mysqli_query($con, $pol);
    ?>
    </table>
</body>
</html>