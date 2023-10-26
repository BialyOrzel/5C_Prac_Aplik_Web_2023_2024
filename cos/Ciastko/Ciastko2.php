<?php
    if(!isset($_COOKIE['visited'])){
        setcookie("visited", "yes");
        $str = "Ciastko o nazwie visited nie jest ustawione.";
    }else{
        $str = "Ciastko o nazwie visited jest ustawione";
        $str .= " jego wartość to: {$_COOKIE['visited']}.";
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciastko2</title>
</head>
<body>
    <div>
        <?php
            echo $str;
        ?>
    </div>
</body>
</html>