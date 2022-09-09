<?php

// https://www.hackerrank.com/challenges/utopian-tree/problem?isFullScreen=true

function utopianTree($n) {
    $height = 1;
    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $height = $height*2;
        } else {
            $height = $height + 1;
        }
    }
    return $height;
}
$n = 5;
echo utopianTree($n);

