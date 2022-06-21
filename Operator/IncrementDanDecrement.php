<?php

    $a = 1;

    //Post increment = kembalikan nilai $a lalu naikkan 1 angka
    $b = $a++;
    var_dump($a);
    var_dump($b);

    //Pre increment = naikkan 1 angka lalu kembalikan nilai $a
    ++$a;
    var_dump($a);
    var_dump($b);

    //Post decrement = kembalikan nilai $a lalu turunkan 1 angka
    $a--;
    var_dump($a);
    var_dump($b);

    //Pre increment = turunkan 1 angka lalu kembalikan nilai $a
    --$a;
    var_dump($a);
    var_dump($b);


?>