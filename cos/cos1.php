<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cos</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Tytuł</td>
            <td>Reżyser</td>
            <td>Czas</td>
        </tr>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "baza_filmow";
        $polonczenie = mysqli_connect($host, $user, $pass, $db);
        $zapytania = "SELECT * FROM filmy";
        $wynik = mysqli_query($polonczenie, $zapytania);
        while($row = mysqli_fetch_row($wynik)){
            echo "<tr>";
            echo "<td>"." $row[0]"." </td>";
            echo "<td>"."$row[1]"." </td>";
            echo "<td>"."$row[2]"." </td>";
            echo "<td>"."$row[3]"." </td>";
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>