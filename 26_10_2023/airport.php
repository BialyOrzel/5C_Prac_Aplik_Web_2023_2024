<?php
    $czas = time() + 60*60;
    if(!isset($_COOKIE['czas'])){
        setcookie("czas",$czas);
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Odloty samolotów</title>
    <link rel ="stylesheet" href = "styl6.css">
</head>
<body>
    <header>
        <section id="b1">
            <h2>Odloty z lotniska</h2>
        </section>
        <section id="b2">
            <img src="zad6.png" alt="logotyp">
        </section>
    </header>
    <main id ="m">
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "egzamin";
                $con = mysqli_connect($host,$user,$pass,$db);
                $pol = "SELECT `id`, `nr_rejsu`, `kierunek`, `czas`,`status_lotu` FROM `odloty` GROUP BY czas DESC";
                $wynik = mysqli_query($con,$pol);
                    while($row = mysqli_fetch_assoc($wynik)){
                        echo"<tr>";
                        echo"<td>".$row["id"]."</td>";
                        echo"<td>".$row["nr_rejsu"]."</td>";
                        echo"<td>".$row["czas"]."</td>";
                        echo"<td>".$row["kierunek"]."</td>";
                        echo"<td>".$row["status_lotu"]."</td>";
                        echo"</tr>";
                    }
                mysqli_close($con);
            ?>
        </table>
    </main>
    <footer>
        <section id = "f1">
            <a href ="kw1.jpg" target = "_blank">Pobierz obraz</a>
        </section>
        <section id = "f2">
            <p>
            <?php
                if(!isset($_COOKIE['czas'])){
                    echo "<i>Dzień dobry! Sprawdź regulamin naszej strony</i>";
                }else{
                    echo "<b>Miło nam że znowu nas odwiedziłeś</b>";
                }
            ?>
            </p>
        </section>
        <section id = "f3">
            Autor: Adrian Włodarczyk
        </section>
    </footer>
</body>
</html>