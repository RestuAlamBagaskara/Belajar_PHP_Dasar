<?php

    $name = "ALAM";

    //Mendapatkan nilai dari $name
    $otherName = &$name;

    //Mengubah nilai dari $othername akan merubah nilai dari $name
    $otherName = "Bagaskara";

    echo $name . PHP_EOL;


    //Pass By Reference
    function increment(int &$value)
    {
        $value++;
    }

    $counter = 1;
    // data dalam cuonter akan bertambah
    increment($counter);

    echo $counter . PHP_EOL;


    function &getValue()
    {
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    $a = 200;

    $b = &getValue();
    echo $b . PHP_EOL;