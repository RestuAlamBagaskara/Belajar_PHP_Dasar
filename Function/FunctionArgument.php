<?php

    //Fungsi dengan argumen
    function Hallo($nama)
    {
        echo "Hello $nama" . PHP_EOL;
    }

    Hallo("REstu");
    Hallo("ALam");

    //Fungsi dengan argumen yang memiliki default value
    function Hai($nama = "AlAm")
    {
        echo "Hai $nama" . PHP_EOL;
    }

    Hai("Restu");
    Hai();


    //variable length argument list
    function tambah(...$values)
    {
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }
        echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
    }

    $nilai = [1, 2, 3, 4, 5];

    tambah(1, 2, 3, 4, 5);
    tambah(...$nilai);

?>