<?php
    
    $quant = $_GET["quantAtual"];

    if($quant <= 12){
        echo 0.20 * $quant;
    }
    else{
        echo 0.15 * $quant;
    }