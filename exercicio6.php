<?php
    $sexo = $_GET["sexo"];
    $altura = $_GET["altura"];

    echo "<h1>Digite F para feminino, e M para masculino!</h1><br>";
    echo "<hr>";

    if($sexo == "feminino"){
        echo (62.1 * $altura) -  44;
            //if($total )//
    }
    else($sexo == "masculino") {
        echo (72.7 * $altura) -  58;
    }
