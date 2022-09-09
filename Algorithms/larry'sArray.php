<?php

// https://www.hackerrank.com/challenges/larrys-array/problem?h_r=internal-search&isFullScreen=true

function larrysArray($arr) {

    $current_sorted_number = 0;
    if($arr[0] == $current_sorted_number + 1) {
        $current_sorted_number++;
    } else {
        $arr[0] = $arr[1];
        $arr[2] = $arr[0];
        $arr[1] = $arr[2];
    }
    print_r($arr);

//    array_shift($arr);
}

$arr = [5,6,1,2,4,3];

echo larrysArray($arr);