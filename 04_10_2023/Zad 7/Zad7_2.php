<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad7_2</title>
</head>
<body>
    <?php
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        $liczba3 = $_POST["liczba3"];
        if($liczba1 < $liczba2 && $liczba1 < $liczba3){
            echo "Liczba 1 ($liczba1) jest najmniejsza";
        }elseif($liczba2 < $liczba1 && $liczba2 < $liczba3){
            echo "Liczba 2 ($liczba2) jest najmniejsza";
        }elseif($liczba3 < $liczba1 && $liczba3 < $liczba2){
            echo "Liczba 3 ($liczba3) jest najmniejsza";
        }else{
            echo "Liczby są równe, albo są dwie najmniejsze liczby.";
        }
    ?>
</body>
</html>