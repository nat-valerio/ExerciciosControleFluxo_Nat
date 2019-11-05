<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercicio 5</title>
    <style>
        
    
    </style>
</head>
<body>

    <?php

    $num1 = $_GET["n1"];
    $num2 = $_GET["n2"];
    $num3 = $_GET["n3"];

    $numeros = array($num1, $num2, $num3);

    /*foreach($numeros as $number){
        echo $number;
    }*/

    for($i=count($numeros)+1; $i>=0; $i++){
            if($num1 > $num2 && $num1 > $num3){
                echo "$num1, $numeros[$i] ";
            }
            elseif($num2 > $num1 && $num2 > $num3){
                echo "$num2, $numeros[$i] ";
            }
            else($num3 > $num1 && $num3 > $num2){
                echo "$num3, $numeros[$i] ";
            }
    }
    ?>
    
</body>
</html>

