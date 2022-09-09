<?php

// https://www.hackerrank.com/challenges/birthday-cake-candles/problem?isFullScreen=true

function birthdayCakeCandles($candles) {
    $max = $candles[0];
    $counter = 0;
    $candlesCount = count($candles);

    for ($i = 0; $i < $candlesCount; $i++) {
        if ($candles[$i] == $max) {
            $counter++;
            continue;
        }
        if ($candles[$i] > $max) {
            $max = $candles[$i];
            $counter = 1;
        }
    }
    return $counter;
}

//$candles = [3, 2, 1, 3];
$candles = [4, 4, 5, 5, 5, 6, 6];
echo birthdayCakeCandles($candles);