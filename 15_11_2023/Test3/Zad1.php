<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad1</title>
</head>
<body>
    <form method = "POST" action="Zad1_2.php">
    <label for="ur">Podaj datę urodzenia(YYYY-MM-DD)</label></br>
        <input type="text"name="ur"><br>
        <label for="plec">Podaj płeć</label><br>
        <select name ="plec">
            <option value="K">Kobieta</option>
            <option value="M">Mężczyzna</option>
        </select></br>
        <label for="uwagi">Podaj swoje uwagi (maks 100 znaków.)</label><br>
        <input type="text"name="uwagi"><br>
        <label for="zgoda">Czy zgadzasz się na udział w badaniu</label><br>
        <input type="checkbox"name="zgoda"><br>
        <input type="submit" value="Wyślij">
    </form>
</body>
</html>