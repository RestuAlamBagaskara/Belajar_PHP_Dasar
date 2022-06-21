<?php

    //Penulisan string dengan single quote
    echo 'Nama : ';
    echo '';
    echo 'Alam';
    echo "\n\n";

    //Penulisan string dengan double quote
    echo "Nama :" ;
    echo "Alam";
    echo "\n\n";

    //membuat Multiline string dengan heredoc <<<[NAMATAG] ..... [NAMATAG]
    echo <<<ALAM
    Pohon
    Kelapa
    Melambai
    ALAM;
    echo "\n\n";

    //membuat Multiline string dengan nowdoc <<<'[NAMATAG]' ..... [NAMATAG]
    echo <<<'ALAM'
    Pohon
    Kelapa
    Tumbang
    ALAM;
    echo "\n\n";


//escape sequence hanya bisa digunakan pada double quote
    // \n untuk enter
    echo "Alam \n Alam";

    // \t untuk tab
    echo "Alam \t Alam";

    // \" untuk penulisan double quote
    echo "Alam \" Alam";
?>