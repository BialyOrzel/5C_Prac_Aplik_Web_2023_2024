<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad5</title>
</head>
<body>
</head>
<body>
    <?php
        //Czy to o to chodziło to nie wiem. I tak zrobione z pomocą czat GPT.
        $a = 0;
        $b = 3;
        $dokladnosc = 0.0001;
        function funkcja($x) {
            return $x * $x - 4;
        }
        
        function metodaPolowienia($a, $b, $dokladnosc) {
            do {
                $srodek = ($a + $b) / 2;
                $wartoscSrodka = funkcja($srodek);
        
                if (abs($wartoscSrodka) < $dokladnosc) {
                    break;
                } elseif ($wartoscSrodka * funkcja($a) < 0) {
                    $b = $srodek;
                } else {
                    $a = $srodek;
                }
            } while (true);
        
            return $srodek;
        }
        $miejsceZerowe = metodaPolowienia($a, $b, $dokladnosc);
        echo "Miejsce zerowe funkcji: " . $miejsceZerowe;
        
    ?>
</body>
</html>
</body>
</html>