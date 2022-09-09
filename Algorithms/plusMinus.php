<?php

// https://www.hackerrank.com/challenges/plus-minus/problem?isFullScreen=true

function plusMinus($arr) {
    $pos = 0;
    $neg = 0;
    $zero = 0;
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] > 0) {
            $pos++;
        } elseif ($arr[$i] < 0) {
            $neg++;
        } else {
            $zero++;
        }
    }

    echo $pos / count($arr)."\n";
    echo $neg / count($arr)."\n";
    echo $zero  / count($arr);
}

$arr = [1,1,0,-1,-1];

echo plusMinus($arr);
