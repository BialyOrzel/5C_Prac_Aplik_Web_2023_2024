<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href = "styl2.css">
</head>
<body>
    <header>
        <section id="baner1">
            <img src ="logo.png" alt="meteo"/>
        </section>
        <section id="baner2">
            <h1>Prognoza dla Wrocławia</h1>
        </section>
        <section id="baner3">
            <p>maj, 2019 r.</p>
        </section>
        <main id ="srodek">
            <table>
                <tr>
                    <th>DATA </th>
                    <th>TEMPERATURA W NOCY </th>
                    <th>TEMPERATURA W DZIEŃ </th>
                    <th>OPADY [mm/h] </th>
                    <th>CIŚNIENIE [hPa] </th>
                </tr>
                <?php
                    $host ="localhost";
                    $user ="root";
                    $pass ="";
                    $db ="prognoza";
                    $pol = mysqli_connect($host, $user, $pass, $db);
                    $zapy ="SELECT * FROM `pogoda` WHERE miasta_id = 1 GROUP BY data_prognozy ASC;";
                    $wynik = mysqli_query($pol, $zapy);
                        while($row = mysqli_fetch_row($wynik)){
                        echo"<tr>";
                        echo"<td>"."$row[2]"."</td>";
                        echo"<td>"."$row[3]"."</td>";
                        echo"<td>"."$row[4]"."</td>";
                        echo"<td>"."$row[5]"."</td>";
                        echo"<td>"."$row[6]"."</td>";
                        echo"</tr>";
                    }
                    mysqli_close($pol);
                ?>
            </table>
            </main>
        <aside id = "lewy">
            <img src = "obraz.jpg"alt="Polska, Wrocław">
        </aside>
        <nav id = "prawy">
            <a href = "kwerendy.txt">Pobierz kwerendy</a>
        </nav>
        <footer id ="stopka">
           <p>Stronę wykonał: Adrian Włodarczyk</p>
        </footer>
    </header>
</body>
</html>