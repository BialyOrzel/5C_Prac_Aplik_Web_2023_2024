<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4_2</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $pierwsza = true;
        for($i = 2; $i < $x; $i++){
            if($x % $i == 0){
                $pierwsza = false;
            }
        }
        if($pierwsza == true){
            echo"Liczba $x jest liczbą pierwszą";
        }else{
            echo "liczba $x nie jest liczbą pierwszą";
        }
        
    ?>
</body>
</html>