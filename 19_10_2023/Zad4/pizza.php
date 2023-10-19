<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>pizza</title>
</head>
<body>
    <?php
        $km = $_POST["km"];
        if (isset($_POST['cie'])){
            $koszt = ($km * 0.5) + (0.15 * ($km * 0.5)) ;
        }else{
            $koszt = ($km * 0.5);
        }
        echo "Koszt dowozu to $koszt zł.";
    ?>
</body>
</html>