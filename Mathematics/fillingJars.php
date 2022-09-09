<?php

// https://www.hackerrank.com/challenges/filling-jars/problem?isFullScreen=true

function solve($n, $operations) {
    $total_can = 0;
    for ($i = 0; $i < count($operations); $i++) {
            $start = $operations[$i][0];
            $end = $operations[$i][1];
            $jars = $end - $start + 1;
            $total_can +=$jars*$operations[$i][2];
    }
    return floor($total_can/$n);
}

$n = 5;
$operations = [[1,2,100], [2,5,100], [3,4,100]];
echo solve($n, $operations);