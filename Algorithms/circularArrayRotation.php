<?php

// https://www.hackerrank.com/challenges/circular-array-rotation/problem?isFullScreen=true

function circularArrayRotation($a, $k, $queries) {
    for ($i = 0; $i < $k; $i++) {
        $last = $a[count($a)-1];
        unset($a[count($a)-1]);
        array_unshift($a, $last);
    }

    for ($i = 0; $i < count($queries); $i++) {
        $num = $queries[$i];
        echo $a[$num];
    }
}
$a = [3,4,5];
$k = 2;
$q = [1,2];
print_r(circularArrayRotation($a, $k, $q));

