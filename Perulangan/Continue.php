<?php

for ( $count = 0; $count <= 100; $count++ ) { 
    if ($count % 2 == 1) {
        continue;
    }
    echo "Count ke-" . $count . PHP_EOL;
}
?>