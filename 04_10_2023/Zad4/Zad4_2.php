<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4_2</title>
</head>
<body>
    <?php
        $liczba = $_POST["liczba"];
        if($liczba < 0){
            echo "Liczba $liczba jest mniejsza od 0";
        }elseif($liczba == 0){
            echo "Liczba $liczba równa się 0";
        }else{
            echo "Liczba $liczba jset większa od 0";
        }
    ?>
</body>
</html>