<?php

    $names = ["Restu", "Alam", "Bagaskata"];
    $namess = [
        "name" => "ALam",
        "Umur" => 12
    ];

    //Mengakses array dengan loop biasa
    for ($i=0; $i < count($names) ; $i++) { 
        echo $names[$i] . PHP_EOL;
    }

    //Mengakses seluruh data array dengan for each loop
    foreach ($names as $name){
        echo $name . PHP_EOL;
    }

    //Mengakses seluruh data array(map) dengan for each loop
    foreach($namess as $key => $value){
        echo "$key : $value" . PHP_EOL;
    }
?>