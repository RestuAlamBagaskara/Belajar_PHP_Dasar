<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//mengubah data array dengan callback function
$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

//Mengurutkan array secara terbalik
rsort($data);
var_dump($data);

//Mengacak data dalam array
shuffle($data);
var_dump($data);

//Mengurutkan array secara terbalik
sort($data);
var_dump($data);

//menadapatkan keys dari map
var_dump(array_keys($data));

//mendapatkan values dari map
var_dump(array_values($data));

$person = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];
var_dump(array_keys($person));
var_dump(array_values($person));