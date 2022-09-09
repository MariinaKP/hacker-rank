<?php

// https://www.hackerrank.com/challenges/diagonal-difference/problem?isFullScreen=true

function diagonalDifference($arr) {
    $arrDiag = count($arr);
    $mainD = 0;
    $secondaryD = 0;
    for($i = 0; $i < $arrDiag; $i++){
        $mainD += $arr[$i][$i];
        $secondaryD += $arr[$i][$arrDiag-$i-1];
    }
    return abs($mainD - $secondaryD);
}

$arr = array (
    array(1,2,3),
    array(4,5,6),
    array(9,8,9)
);

echo diagonalDifference($arr);