<?php
    $dzi= $_POST['dzi'];
    $mie= $_POST['mie'];
    $rok= $_POST['rok'];

    $uro = $dzi . "." . $mie;
    $cookie_name = "Urodziny";
    setcookie($cookie_name, $uro, time() + 60*60*24 * 7);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad6_2</title>
</head>
<body>
    <?php
        $currentDate = date("d.m");
        if(isset($_COOKIE[$cookie_name])){
            if($currentDate == $_COOKIE[$cookie_name]){
                echo "Wszystkiego najlepszego";
            }else{
                echo "Cos";
            }
        }
    ?>
</body>
</html>