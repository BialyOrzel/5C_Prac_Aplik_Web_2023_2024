<?php
session_start();
if($_SESSION['login'] == 1){
    header("Location: C:\xampp\htdocs\AW\5C_Prac_Aplik_Web_2023_2024\23_11_2023\podstrona1a.php");
    exit();
}else{
    header("Location: C:\xampp\htdocs\AW\5C_Prac_Aplik_Web_2023_2024\23_11_2023\podstrona1.php");
    exit();
}
    include "podstrona1.php";
    include "podstrona1a.php";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona</title>
</head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "cos";
        $con = mysqli_connect($host, $user, $pass, $db);
        $login = $_POST["login"];
        $haslo = $_POST["haslo"];
        $pol = "SELECT * FROM `konta` WHERE `login` = '$login' AND `haslo` = '$haslo'";
        $wynik = mysqli_query($con, $pol);
        $row = mysqli_fetch_row($wynik);
        if($row != 0){
            if($row[1]==$login && $row[2]==$haslo){
                if($row[3]=="admin"){
                    $_SESSION['login'] = 1;
                }else{
                    $_SESSION['login'] = 2;
                }
            }
            }else{
                echo "Dane są niepoprawne";
            }
    ?>
    </table>
</body>
</html>