<?php

    function foo()
    {
        echo "Foo" . PHP_EOL;
    }

    $functionYangAkanDipanggil = "foo";
    $functionYangAkanDipanggil();


    function sayHello(string $name, $filter)
    {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Restu", "strtoupper");
    sayHello("Alam", "strtolower");

?>