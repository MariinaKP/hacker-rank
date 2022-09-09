<?php

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $apples_in_the_house = 0;
    $oranges_in_the_house = 0;

    for ($i = 0; $i < count($apples); $i++) {
        if ($apples[$i] + $a >= $s && $apples[$i] + $a <= $t ) {
            $apples_in_the_house++;
        }
    }
    for ($i = 0; $i < count($oranges); $i++) {
        if ($oranges[$i] + $b >= $s && $oranges[$i] + $b <= $t ) {
            $oranges_in_the_house++;
        }
    }
    echo $apples_in_the_house.', '.$oranges_in_the_house;

}

$s = 7;
$t = 10;
$a = 4;
$b = 12;
$apples = [2, 3, -4];
$oranges = [3, -2, -4];

print_r(countApplesAndOranges($s, $t, $a, $b, $apples, $oranges));

