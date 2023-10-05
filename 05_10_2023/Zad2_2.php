<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad2_2</title>
</head>
<body>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        echo "Pętla for<br>";
        for($i = $x; $i <= $y; $i +=2){
            echo "$i, ";
        }
        echo "<br>";
        $i -=2;
        for($i; $i >= 1; $i -=4){
            echo"$i, ";
        }
    ?>
    <br>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        echo "Pętla while<br>";
        $i =$x;
        while($i <= $y){
            echo $i.", " ;
            $i +=2; 
        }
        echo "<br>";
        $i -=2;
        while($i >= 1){
            echo $i.", " ; 
            $i -=4 ;
        }
    ?>
    <br>
    <?php
        $x = $_POST["x"];
        $y = $_POST["y"];
        echo "Pętla do while<br>";
        $i =$x;
        do{
            echo $i.", " ;
            $i +=2;
        }while($i <= $y);
        $i -=2;
        echo"<br>";
        do{
            echo $i.", " ;
            $i -=4;
        }while($i >= 1);
    ?>
</body>
</html>