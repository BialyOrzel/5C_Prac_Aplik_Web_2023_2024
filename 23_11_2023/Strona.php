<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login'] = 0;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href ="style.css">
    <title>Logowanie</title>
</head>
<body>
    <header></header>
    <main>
        <form method = "POST" action="Strona2.php">
            <label for="login">Podaj login</label><br>
            <input type="text"name="login"><br>
            <label for="haslo">Podaj hasło</label></br>
            <input type="text"name="haslo"></br></br>
            <input type="submit" value="Zaloguj">
        </form>
    </main>
</body>
</html>