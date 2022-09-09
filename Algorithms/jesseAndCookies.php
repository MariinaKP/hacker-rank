<?php

// https://www.hackerrank.com/challenges/jesse-and-cookies/problem?isFullScreen=true

function cookies($k, $A) {
    $count = 0;
    sort($A);

    while (true) {
        if($A[0] > $k) {
            break;
        }
        if ($A[0] <= $k && count($A) <= 1) {
            return -1;
        }

        $first = array_shift($A);
        $second = array_shift($A);

        $newCookie = $first + 2*$second;

        $index_to_insert = -1;
        for ($i = 0; $i < count($A); $i++) {
            if ($A[$i] > $newCookie) {
                $index_to_insert = $i;
                break;
            }
        }
        if ($index_to_insert == -1) {
            array_push($A, $newCookie);
        } else {
            array_splice($A, $index_to_insert, 0, [$newCookie]);
        }
        $count++;
    }
    return $count++;
}

$k = 7;
$array = [1, 2, 3, 9, 10, 12];

print_r(cookies($k, $array));
