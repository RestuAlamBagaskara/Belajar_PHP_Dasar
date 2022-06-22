<?php

//Hanya bisa diakses diluar function
$name = "Restu"; // global scope

function sayHello()
{
    //Jika ingin mengakses variable diluar function gunakan "global"
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;
}

sayHello();
