<?php

// https://www.hackerrank.com/challenges/recursive-digit-sum/problem?isFullScreen=true

function superDigit($n, $k) {
    if (strlen($n) == 1) return $n;

    $s = array_reduce(str_split($n), function ($sum, $digit) {
        $sum += $digit;
        return $sum;
    }, 0);
    return superDigit($s * $k, 1);
}

$n = '9875';
$k = 4;
echo superDigit($n, $k);



