<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>
<body>

    <form action="exercicio2.php">
        <div>
        <?php
            $ano = $_GET["anoAtual"];

            if($ano < 2004){
                echo "Ainda é um bebê $ano";
                echo "<figure><img src='img/baby.jpg'></figure>";
            }
            else{
                echo "Já é mocinho $ano";
                echo "<figure><img src='img/comlicenca.jpg'></figure>";
            }
        ?>

        </div>
    </form>
</body>
</html>