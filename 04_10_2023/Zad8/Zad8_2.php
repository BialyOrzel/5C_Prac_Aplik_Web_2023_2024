<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad8_2</title>
</head>
<body>
    <?php
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        $liczba3 = $_POST["liczba3"];
        if($liczba1 == $liczba2 && $liczba1 == $liczba3){
            echo"Wszystkie liczby są równe ($liczba1)";
        }elseif($liczba1 == $liczba2){
            echo "Liczba 1 jest równa liczbie 2 ($liczba1 = $liczba2)";
        }elseif($liczba1 == $liczba3){
            echo "Liczba 1 jest równa liczbie 3 ($liczba1 = $liczba3)";
        }elseif($liczba2 == $liczba3){
            echo "Liczba 2 jest równa liczbie 3 ($liczba2 = $liczba3)";
        }else{
            echo"Nie ma liczb równych ($liczba1), ($liczba2), ($liczba3)";
        }
    ?>
</body>
</html>