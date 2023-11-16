<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "egzamin";
        $con = mysqli_connect($host, $user, $pass, $db);
        $ur = $_POST["ur"];
        $plec = $_POST["plec"];
        $uwagi = $_POST["uwagi"];
        $ur = $_POST["ur"];
        if(isset($_POST["zgoda"])){
            $zgoda = "Tak";
        }else{
            $zgoda = "Nie";
        }
        $pol = "INSERT INTO `badanie`(`rok_urodzenia`, `plec`, `uwagi`, `zgoda`) VALUES ('$ur','$plec','$uwagi',' $zgoda')";
        $wynik = mysqli_query($con, $pol);
    ?>
</body>
</html>