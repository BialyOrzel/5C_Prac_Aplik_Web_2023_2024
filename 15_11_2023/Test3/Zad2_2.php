<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nazwisko</td>
            <td>Imię</td>
            <td>Ocena</td>
        </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "egzamin";
        $con = mysqli_connect($host, $user, $pass, $db);
        $nazw = $_POST["nazw"];
        $imie = $_POST["imie"];
        $oceny = $_POST["oceny"];
        $pol = "INSERT INTO `dziennik`(`Nazwisko`, `Imie`, `Ocena`) VALUES ('$nazw','$imie','$oceny')";
        $wynik = mysqli_query($con, $pol);
        $zapy1 = "SELECT * FROM `dziennik`";
        $wyn1 = mysqli_query($con, $zapy1);
        $zapy2 = "SELECT AVG(Ocena) FROM `dziennik`";
        $wyn2 = mysqli_query($con, $zapy2);
            while($row = mysqli_fetch_row($wyn1)){
                echo "<tr>";
                echo "<td>"."$row[0]"."</td>";
                echo "<td>"."$row[1]"."</td>";
                echo "<td>"."$row[2]"."</td>";
                echo "<td>"."$row[3]"."</td>";
                echo "</tr>";
            }
            while($sre = mysqli_fetch_row($wyn2)){
                echo "Średnia ocen to $sre[0].";
            }
    ?>
    <table>
</body>
</html>