<?php

    $a = [1,2,3,4,5];
    $b = [2,3,4,5,1];

    //union = menggabungkan array
    var_dump($a + $b);

    //equality = true jika array memiliki key-value yang sama
    var_dump($a == $b);

    //identity = true jika array memiliki key-value dan posisi yang sama
    var_dump($a === $b);

    //equality = false jika array memiliki key-value yang sama
    var_dump($a != $b);
    var_dump($a <> $b);

    //inidentity = false jika array memiliki key-value dan posisi yang sama
    var_dump($a !== $b);
?>