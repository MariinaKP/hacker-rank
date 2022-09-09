<?php

function selectionSort($arr) {
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        $min = $i;
        $temp = $arr[$i];
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

$arr = [3,2,5,1,6,4,9,8,7];
print_r(selectionSort($arr));