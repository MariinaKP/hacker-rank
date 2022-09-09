<?php

// https://www.hackerrank.com/challenges/beautiful-days-at-the-movies/problem?isFullScreen=true

function beautifulDays($i, $j, $k) {
    $count = 0;
    for ($n = $i; $n <= $j; $n++) {
        $day = abs($n - strrev($n)) / $k;
        if (is_int($day)) {
            $count++;
        }
    }
    return $count;
}

$i = 20;
$j = 23;
$k = 6;

echo beautifulDays($i, $j, $k);