<?php

//Nilai dalam constant tidak bisa di ubah
//Disarankan menggunakan UPPER_CASE

    define('NAMA', 'ALAM');
    define('UMUR', 20);

    // Kode di bawah akan memunculkan warning ketika di jalankan karena menggunakan nama constant yang sama
    // define('NAMA', 'RESTU');

    echo NAMA;
    echo "\n";
    echo UMUR;
?>