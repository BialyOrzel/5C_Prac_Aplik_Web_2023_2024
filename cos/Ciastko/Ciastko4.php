<?php
    setcookie("test","test", time() + 3600,"/");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciastko3</title>
</head>
<body>
    <?php
        if(count($_COOKIE) > 0){
            echo "Ciastka są włączone.";
        }else{
            echo "Ciastka są wyłączone.";
        }
    ?>
</body>
</html>