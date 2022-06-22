<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Alam");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

//fungsi Anonymus yang digunakan sebagai argumen fungsi yang lain
sayGoodBye("Eko", function (string $name): string {
    return strtoupper($name);
});

$firstName = "Alam";
$lastName = "Bagaskara";

//menggunakan use agar bisa menggunakan variable yang berada di luar closure
$sayHai = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHai();

//nilai variable tidak berubah
$firstName = "Restu";
$lastName = "Alam";
$sayHai();
