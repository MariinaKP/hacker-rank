<?php

function insertionSort($arr) {
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$j] > $arr[$i]) {
                array_splice($arr, $j, 0, $arr[$i]);
                array_splice($arr, $i + 1, 1, []);
                continue;
            }
        }
    }
    return $arr;
}

$arr = [9,8,7,6,5,4,3,2,1];
print_r(insertionSort($arr));
