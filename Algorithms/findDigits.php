<?php

// https://www.hackerrank.com/challenges/find-digits/problem?isFullScreen=true

function findDigits($n) {
    $num_as_string = strval($n);
    $count = 0;
    for ($i = 0; $i < strlen($num_as_string); $i++) {
        $num = $n / $num_as_string[$i];
        if (is_int($num)) {
            $count++;
        }
    }
    return $count;
}
$n = 124;
echo findDigits($n);
