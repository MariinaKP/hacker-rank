<?php

// https://www.hackerrank.com/challenges/arrays-ds/problem?isFullScreen=true

function reverseArray($a) {
    $reversedArray = [];
    for ($i = count($a)-1 ; $i >= 0; $i-- ) {
        array_push($reversedArray, $a[$i]);
    }
    return $reversedArray;
}

$input = [1,2,3];

print_r(reverseArray($input));