<?php

function binarySearch($arr, $n)
{
    if (count($arr) === 0) {
        return "Empty array!";
    }
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if($arr[$mid] == $n) {
            return "Exist!";
        }
        if ($n < $arr[$mid]) {
            $high = $mid -1;
        } else {
            $low = $mid + 1;
        }
    }
    return "Does not exist!";
}

$arr = array(1, 2, 3, 4, 5);
$n = 0;
echo binarySearch($arr, $n);
