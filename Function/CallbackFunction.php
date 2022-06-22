<?php

    function Hai(string $name, callable $filter)
    {
        //call_user_func() untuk memanggil callable function
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }

    Hai("Alam", "strtoupper");
    Hai("Alam", "strtolower");
    Hai("Alam", function (string $name): string {
        return strtoupper($name);
    });
    Hai("Alam", fn($name) => strtolower($name));

?>