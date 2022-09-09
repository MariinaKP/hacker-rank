<?php

// https://www.hackerrank.com/challenges/triangle-numbers/problem?h_r=internal-search&isFullScreen=true

function solve($n) {
    if ($n % 2 != 0) {
        return 2;
    } elseif (is_int($n / 4)) {
        return 3;
    } else {
        return 4;
    }
}
$n = 3;
echo solve($n);
