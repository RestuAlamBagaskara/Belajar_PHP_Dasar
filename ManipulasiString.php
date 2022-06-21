<?php

    // (.) operator untuk menambahkan string
    $nama = "ALAM";
    echo "Nama : " . $nama . PHP_EOL;
    echo "Umur : " . 20 . PHP_EOL;

    //Konversi Int
    var_dump((int)"100");

    //Konversi ke FLoat
    var_dump((float)"100");

    //Konversi ke String
    var_dump((string)"100");

    //Akses karakter dalam string
    echo $nama[2] . PHP_EOL; //menampilkan A
    echo $nama[3] . PHP_EOL; //menampilkan M

    //variable parsing
    echo "Selamat pagi, $nama !". PHP_EOL;

    //variable parsing dengan curly brace
    echo "Selamat pagi, {$nama}s!". PHP_EOL;
?>