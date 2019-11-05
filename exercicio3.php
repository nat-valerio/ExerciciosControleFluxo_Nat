<?php

    $senha = $_GET["senhaAtual"];

    if($senha == 1234){
        echo "<h1>Acesso Permitido!</h1>";
    }
    else{
        echo "<h1>Acesso Negado!</h1>";
    }