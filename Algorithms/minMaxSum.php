<?php

// https://www.hackerrank.com/challenges/mini-max-sum/problem?isFullScreen=true

function miniMaxSum($arr) {
    $min = array_sum($arr) - $arr[0];
    $max = array_sum($arr) - $arr[0];
    for($i = 0; $i<count($arr); $i++) {
        $sum = array_sum($arr) - $arr[$i];
        if ($sum > $max){
            $max = $sum;
        }
        if ($min > $sum){
            $min = $sum;
        }
    }
    echo $min." ".$max;
}

$arr = [1, 2, 3, 4, 5];
print_r(miniMaxSum($arr));