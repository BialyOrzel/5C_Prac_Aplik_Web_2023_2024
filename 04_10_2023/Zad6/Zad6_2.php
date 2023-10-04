<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad6_2</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba < 1582){
            echo "Przed reformą z 1582r. Luty ma 28 dni";
        }elseif($liczba % 400 == 0){
            echo "Luty ma 29 dni";
        }elseif($liczba % 100 == 0){
            echo "Luty ma 28 dni";
        }elseif($liczba % 4 == 0){
            echo "Luty ma 29 dni";
        }else{
            echo "Luty ma 28 dni";
        }
    ?>
</body>
</html>