<?php

    //IfElse biasa
    $gender = "Pria";
    $Hi = null;

    if ($gender == "Pria") {
        $Hi = "Hi Bro";
    }
    else {
        $Hi = "Nona";
    }

    echo $Hi . PHP_EOL;

    $Hi = $gender == "Pria" ? "Hi Bro" : "Hi Nona";

    echo $Hi . PHP_EOL;
?>