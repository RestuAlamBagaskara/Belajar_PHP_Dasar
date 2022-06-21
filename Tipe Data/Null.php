<?php

//Penulisan null adalah case insensitive

    //Mengubah nilai variable menjadi null
    $nama = "ALAM";
    $nama = Null;

    $umur = NULL;

    var_dump($nama);
    var_dump($umur);


    //Menghapus variable
    $akanDihapus = "ALAM";
    // unset($akanDihapus); // menghapus variable
    // echo $akanDihapus;

    //Mengecek Variable dan mengecek nilai null
    $makan = null;
    $minum = "teh";
    var_dump(isset($makan));
    var_dump(isset($minum));

?>