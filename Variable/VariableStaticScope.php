<?php

function increment()
{
    //akan mendapatkan nilai dari variable sebelumnya dengan nama yang sama
    static $counter = 1; // static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}


increment();
increment();
increment();
increment();
increment();
increment();