<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Função while e if no PHP</title>
</head>
<body>
    <?php
        $i = 0;
        $contP = 0;
        $contI = 0;
        while($i <= 60){
            if($i % 2 == 0){
                echo "O número $i é par<br>";
                $contP ++;
            }else{
                echo "O número $i é ímpar<br>";
                $contI ++;
            }
            $i = $i + 3;
        }
            echo "<br><br>"
            echo "Quantodade rde números pares foi $contP<br>";
            echo "Quantodade rde números ímpares foi $contI<br>";
            ?>
</body>
</html>