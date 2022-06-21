<?php

    //membuat array dengan array()
    $nilai1 = array(1,"2",True,NUll);

    //membuat array dengan []
    $nilai2 = [1,2,3,4];

    //membuat array sebagai map
    $nilai3 = [
        "id" => 12,
        "nama" => "ALAM",
        "umur" => 20,
    ];

    //array dalam array
    $nilai4 = [
        "id" => 12,
        "nama" => "ALAM",
        "umur" => 20,
        "hobi" => array(
            "sport" => "badminton"
        )
    ];


    // var_dump($nilai1);
    // var_dump($nilai2);

    //Ubah data pada array
    $nilai1[0] = 'alam';
    $nilai2[0] = 'alam';
    $nilai3["id"] = 11;

    //tambah data ke array di urutan terakhir
    $nilai1[] = "5";
    $nilai2[] = "9";
    $nilai3["hobi"] = "foto";

    //hapus data pada array
    unset($nilai1[1]);
    unset($nilai2[1]);

    // menghitung data pada array
    count($nilai1);
    count($nilai2);

    //Akses nilai data pertama
    echo $nilai1[0] . "\n";
    echo $nilai2[0] . "\n";
    echo $nilai3["nama"] . "\n";
    echo $nilai4["hobi"]["sport"] . "\n";
    

    var_dump($nilai1);
    var_dump($nilai2);
    var_dump($nilai3);
    var_dump($nilai4);
?>