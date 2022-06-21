<?php

    $nilai = 70;
    $present = 90;

    if ($nilai >= 80 and $present >= 90 ) {
        echo "Nilai A" . PHP_EOL;
    }
    elseif ($nilai >= 70 and $present >= 70) {
        echo "Nilai B" . PHP_EOL;
    }
    elseif ($nilai >= 60 and $present >= 70) {
        echo "Nilai C" . PHP_EOL;
    }
    else{
        echo "Nilai D" . PHP_EOL;
    }


    //Syntax alternatif
    if ($nilai >= 80 and $present >= 90 ) :
        echo "Nilai A" . PHP_EOL;
    elseif ($nilai >= 70 and $present >= 70) :
        echo "Nilai B" . PHP_EOL;
    elseif ($nilai >= 60 and $present >= 70) :
        echo "Nilai C" . PHP_EOL;
    else :
        echo "Nilai D" . PHP_EOL;
    endif //wajib ditutup dengan endif
?>