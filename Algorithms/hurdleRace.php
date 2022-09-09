<?php

// https://www.hackerrank.com/challenges/the-hurdle-race/problem?isFullScreen=true

function hurdleRace($k, $height) {
    if (max($height) <= $k) {
        return 0;
    } else {
        return max($height) - $k;
    }
}

$k = 3;
$height = [1, 2, 3, 3, 2];

echo hurdleRace($k, $height);

