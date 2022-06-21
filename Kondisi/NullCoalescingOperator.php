<?php

    //Tanpa Null Coalescing Operator
    $data = ['action' => 'Create'];

    if (isset($data['action'])) {
        $action = $data['action'];
    }
    else{
        $action = "nothin"   ;
    }

    echo $action . PHP_EOL;

    //Menggunakan Null Coalescing Operator
    $action = $data['action'] ?? "Nothing";

    echo $action;

?>