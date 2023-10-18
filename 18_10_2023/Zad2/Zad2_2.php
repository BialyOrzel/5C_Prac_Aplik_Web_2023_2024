<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2_2</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Tytul</td>
            <td>Reżyser</td>
            <td>Czas trwania(min)</td>
        </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";
        $con = mysqli_connect($host, $user, $pass, $db);
        $tytul = $_POST["tytul"];
        $pol = "SELECT * FROM `filmy` WHERE tytul = '$tytul'";
        $wynik = mysqli_query($con, $pol);
        while($row = mysqli_fetch_row($wynik)){
            echo"<tr>";
            echo"<td>"."$row[0]"."</td>";
            echo"<td>"."$row[1]"."</td>";
            echo"<td>"."$row[2]"."</td>";
            echo"<td>"."$row[3]"."</td>";
            echo"</tr>";
        }
    ?>
    </table>
</body>
</html>