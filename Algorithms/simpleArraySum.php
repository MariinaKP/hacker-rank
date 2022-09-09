<?php

// https://www.hackerrank.com/challenges/simple-array-sum/problem?isFullScreen=true

function simpleArraySum($ar) {
    $sum = 0;
    for($i = 0; $i < count($ar); $i++) {
        $sum += $ar[$i];
    }
    return $sum;
}

$input = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
print_r(simpleArraySum($input));