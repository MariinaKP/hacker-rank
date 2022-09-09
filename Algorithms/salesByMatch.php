<?php

// https://www.hackerrank.com/challenges/sock-merchant/problem?isFullScreen=true

function sockMerchant($n, $ar) {
    $sorted_socks = array_values(array_count_values($ar));
    $count = 0;
    for ($i = 0; $i < count($sorted_socks); $i++) {
        $count += floor($sorted_socks[$i] / 2);
    }
    return $count;
}

$n = 20;
$ar = [4, 5, 5, 5, 6, 6, 4, 1, 4, 4, 3, 6, 6, 3, 6, 1, 4, 5, 5, 5];

print_r(sockMerchant($n, $ar));


