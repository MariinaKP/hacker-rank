<?php

// https://www.hackerrank.com/challenges/array-left-rotation/problem?isFullScreen=true

function rotateLeft($d, $arr) {

    for($i = 0; $i < $d; $i++) {
        $last = $arr[$i];
        unset($arr[$i]);
        array_push($arr, $last);
    }
    return $arr;
}

$d = 2;
$arr = [1, 2, 3, 4, 5];

print_r(rotateLeft($d, $arr));