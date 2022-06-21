<?php

    //INfinity Loop
    // for (; ;) { 
    //     echo "Stop" . PHP_EOL;
    // }

    
    for ( $count = 1; $count <= 10; $count++ ) { 
        echo "Count ke-" . $count . PHP_EOL;
    }

    for ( $count = 10; $count >= 0; $count-- ) { 
        echo "Count ke-" . $count . PHP_EOL;
    }


    //syntax alternative
    for ( $count = 1; $count <= 10; $count++ ) :
        echo "Count ke-" . $count . PHP_EOL;
    endfor
?>