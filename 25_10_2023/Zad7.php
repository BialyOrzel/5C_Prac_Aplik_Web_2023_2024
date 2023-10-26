<?php
    $czas = time() + 60*60*;
    if(!isset($_COOKIE['czas'])){
        setcookie("czas", $czas);
    }
    if(!isset($_COOKIE['odwiedziny'])){
        $ile = 1;
    }else if(time()> $_COOKIE['czas']){
        $ile = (int)$_COOKIE['odwiedziny'];
        if($ile < 1){
            $ile = 1;
        }
        $ile++;
        setcookie("czas", $czas);
    }else{
        $ile = (int)$_COOKIE['odwiedziny'];}
    setcookie("odwiedziny","$ile");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad7</title>
</head>
<body>
    <p>
    <?php
        if($ile == 1){
            $str = "raz";
        }else{
            $str = "razy";
            echo "Witamy, odwiedziłeś nas $ile $str.";
        }
    ?>
    </p>
</body>
</html>