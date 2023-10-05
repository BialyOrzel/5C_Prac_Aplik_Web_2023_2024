<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad4_2</title>
</head>
<body>
    <?php
    echo "Pętla for<br>";
        echo "<table>";
        for($i = 0; $i <= 10; $i++){
            echo"<tr>";
            echo "<td >$i</td>";
            for($j = 1;$j <=10; $j++){
                echo "<td>";
                if($i>0){
                echo $i * $j." ";
                }else{
                    echo $j;
                }
                echo "</td>";
            }echo "</tr>";
        }
        echo "</table>";
    ?>
    <?php
    echo "Pętla while<br>";
        echo "<table>";
        $i = 0;
        
        while( $i <= 10){
            echo"<tr>";
            echo "<td >$i</td>";
            $j = 1;
            while($j <= 10){
                echo "<td>";
                if($i>0){
                echo $i*$j." ";
                }else{
                    echo $j;
                }
                echo "</td>";
                $j++;
            }echo "</tr>";
            $i++;
        }
        echo "</table>";
    ?>
    <?php
    echo "Pętla do while<br>";
        echo "<table>";
        $i = 0;
        do{
            echo"<tr>";
            echo "<td >$i</td>";
            $j = 1;
            do{
                echo "<td>";
                    if($i>0){
                    echo $i*$j." ";
                    }else{
                        echo $j;
                    }
                    echo "</td>";
                    $j++;
                }while($j <= 10);
                echo "</tr>";
                $i++;
        }while($i <= 10);
        echo "</table>";
    ?>

</body>
</html>