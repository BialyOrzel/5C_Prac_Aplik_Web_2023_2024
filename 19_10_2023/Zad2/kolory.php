<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kolory</title>
    <style>
        p{
        width:25% ;
        height: 50%;
        margin-left:auto;
        margin-right:auto;
        margin-top:50px;
        border: 1px dashed red;
        }
    </style>
</head>
<body>
    <?php
        $bcolor ="#" . $_POST["bcolor"];
        $color = "#" . $_POST["color"];
        if(strlen($bcolor) != 7  || strlen($color) != 7){
            echo "Długość zminnej niepoprawna (musi wynosić 6)";
        }else{
        echo "<p style = 'color: $color ; background-color: $bcolor ;'>Adrian Włodarczyk</p>";
        }
    ?>
</body>
</html>