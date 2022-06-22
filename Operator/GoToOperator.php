<?php

goto a;

//echo tidak dijalankan
echo "Hello World" . PHP_EOL;

//langsung kesini
a:
echo "Hello A" . PHP_EOL;

$counter = 1;

while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";