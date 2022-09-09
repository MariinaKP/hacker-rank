<?php

// https://www.hackerrank.com/challenges/compare-the-triplets/problem?isFullScreen=true

function compareTriplets($a, $b) {
    $Alice = 0;
    $Bob = 0;
    for($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            $Alice += 1;
        } elseif ($a[$i] < $b[$i]) {
            $Bob += 1;
        }
    }
    return $Alice.' '.$Bob;
}

$a = [5, 6, 7];
$b = [3, 6, 10];
echo compareTriplets($a, $b);