<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1_2</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        echo "<table>";
        for($i = 0; $i < $x; $i++){
            echo "<tr>";
            for($j = 0; $j < $y; $j++){
                echo"<td style = 'border:1px solid gray; width:20px; height:20px;' ></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>