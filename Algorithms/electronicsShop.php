<?php

// https://www.hackerrank.com/challenges/electronics-shop/problem?isFullScreen=true

function getMoneySpent($keyboards, $drives, $b) {
    $pairs = [];
    for ($i = 0; $i < count($keyboards); $i++) {
        for ($j = 0; $j < count($drives); $j++) {
            $pair = $keyboards[$i] + $drives[$j];
            if ($pair <= $b) {
                array_push($pairs, $pair);
            }
        }
    }
    if (empty($pairs)) {
        return -1;
    } else {
        return max($pairs);
    }
}
$keyboards = [40, 50, 60];
$drives = [5, 8, 12];
$b = 60;

echo getMoneySpent($keyboards, $drives, $b);