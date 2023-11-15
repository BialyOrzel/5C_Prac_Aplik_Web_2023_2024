<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nazwisko</td>
            <td>Imie</td>
            <td>Data urodzenia</td>
        </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "egzamin";
        $con = mysqli_connect($host, $user, $pass, $db);
        $pol = "SELECT * FROM `5c`";
        $wynik = mysqli_query($con, $pol);
        while($row = mysqli_fetch_row($wynik)){
            echo"<tr>";
            echo"<td>"."$row[0]"."</td>";
            echo"<td>"."$row[1]"."</td>";
            echo"<td>"."$row[2]"."</td>";
            echo"<td>"."$row[3]"."</td>";
            echo"</tr>";
        }
        mysqli_close($con);
    ?>
    </table>
</body>
</html>