<?php
    if(!isset($_COOKIE['hits'])){
        $ile = 1;
    }else{
        $ile = (int)$_COOKIE['hits'];
        if($ile < 1)
            $ile = 1;
        $ile++;
    }
    setcookie("hits","$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5</title>
</head>
<body>
    <p>
    <?php
        if($ile == 1){
            $str = "raz";
        }else{
            if($ile == 10){
                $str = "razy";
            echo "Witamy, odwiedziłeś nas  już $ile $str.";
            }else{
            $str = "razy";
            echo "$ile wejście.";
            }
        }
    ?>
    </p>
</body>
</html>