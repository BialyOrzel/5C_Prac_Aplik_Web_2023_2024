<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1</title>
</head>
<body>
    <form method = "POST" action="Zad2_2.php">
    <label for="nazw">Podaj Nazwisko</label></br>
        <input type="text"name="nazw"><br>
        <label for="imie">Podaj imię</label><br>
        <input type="text"name="imie"><br>
        <label for="oceny">Podaj ocenę</label><br>
        <select name ="oceny">
            <option  type = "number" value="1">1</option>
            <option type = "number" value="2">2</option>
            <option type = "number" value="3">3</option>
            <option type = "number" value="4">4</option>
            <option type = "number" value="5">5</option>
            <option type = "number" value="6">6</option>
        </select></br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>