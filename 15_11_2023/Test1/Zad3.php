<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad3</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "egzamin";
        $con = mysqli_connect($host, $user, $pass, $db);
        mysqli_close($con);
    ?>
</body>
</html>