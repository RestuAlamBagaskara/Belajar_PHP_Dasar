<?php

    //int adalah tipe data return yang diinginkan
    function sum(int $first, int $second): int
    {
        $total = $first + $second;
        return $total;
    }

    $result = sum(10, 10);
    var_dump($result);

    $result = sum("100", "100");
    var_dump($result);

    //string adalah tipe data return yang diinginkan
    function getFinalValue(int $value): string
    {
        if ($value >= 80) {
            return "A";
        } else if ($value >= 70) {
            return "B";
        } else if ($value >= 60) {
            return "C";
        } else {
            return "E";
        }

        echo "Ups" . PHP_EOL;
    }

    $score = getFinalValue(90);
    var_dump($score);
?>