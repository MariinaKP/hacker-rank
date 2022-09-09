<?php

// https://www.hackerrank.com/challenges/one-month-preparation-kit-time-conversion/problem?h_r=internal-search&isFullScreen=true

function timeConversion($s) {
    $hours = substr($s, 0, 2);
    $minSec = substr($s, 2, 6);
    $period = substr($s,8, 9);

    if ($period == "AM" && $hours == 12) {
        $hours = '00';
    }
    if ($period == "PM" && $hours == 12) {
        return $hours.$minSec;
    }
    if ($period == "PM") {
            $hours = $hours + 12;
    }
    return $hours.$minSec;
}

$s = "12:45:54PM";
echo timeConversion($s);
