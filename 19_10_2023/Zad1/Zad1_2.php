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
        $db = "logowania";
        $con = mysqli_connect($host, $user, $pass, $db);
        $login = $_POST["login"];
        $email = $_POST["email"];
        $passw = $_POST["pass"];
        $pol = "SELECT * FROM `logowanie` WHERE `login` = '$login' AND `pass` = '$passw'";
        $wynik = mysqli_query($con, $pol);
        $row = mysqli_fetch_row($wynik);
        if($row != 0){
            if($row[1]==$login && $row[3]==$passw){
                echo "Dane są poprawne</br>";
                echo "<h3>Dane konta:</br> Login:$login</br> Hasło:$passw</br> Email:$email </h3>";
            }
            }else{
                echo "Dane są niepoprawne";
            }
    ?>
    </table>
</body>
</html>