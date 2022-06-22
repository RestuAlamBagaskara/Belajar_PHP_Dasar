<?php

    //menggabungakan arrayb menjadi string berdasarkan separator pada argumen pertama
    var_dump(join(",", [10, 11, 12, 13, 14, 15]));

    //mengubah string menjadi array berdasarkan separator pada argumen pertama
    var_dump(explode(" ", "Alam Bagaskara"));

    //mengubah string menjadi lowercase
    var_dump(strtolower("Alam Bagaskara"));

    //mengubah string menjadi uppercase
    var_dump(strtoupper("Alam Bagaskara"));

    //menghilangkan whitespace pada string di kanan dan kiri
    var_dump(trim("        Alam      Bagaskara       "));

    //mengambil string tertentu yan ditentukan
    var_dump(substr("Alam Bagaskara", 0, 4));

?>