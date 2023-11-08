<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1</title>
</head>
<body>
    <form method = "Post" action="Zad1_2.php">
    <label for="pol">Podaj ilość złotych.</label><br>
        <input type="number" name="pol"><br>
        <label>Podaj na jaka walutę chcesz przeliczyć.</label><br>
        <select name ="waluta">
            <option value="eur">Euro</option>
            <option value="usd">Dolar</option>
            <option value="frc">Frank</option>
        </select></br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>