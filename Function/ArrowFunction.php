<?php

    $firstName = "Alam";
    $lastName = "Bagaskara";
    
    //Menggunakan fungsi anonimus
    $anonymousFunction = function () use ($firstName, $lastName) : string {
        return "Hello $firstName $lastName" . PHP_EOL;
    };
    
    //menggunakan arrow fungsi akan menghasilkan output yang sama
    //arrow fungsi dibuat sebagai alternative fungsi anonimus
    $arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;
    
    echo $anonymousFunction();
    echo $arrowFunction();
?>