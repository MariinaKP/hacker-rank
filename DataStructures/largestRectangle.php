<?php

// https://www.hackerrank.com/challenges/largest-rectangle/problem?isFullScreen=true

function largestRectangle($h) {
    $rectangle_areas = [];
    $h_length = count($h);

    for ($i = 0; $i < $h_length; $i++) {
        $base_length = 1;
        $cur_height = $h[$i];

        // increment $base_length to the left
        for ($j = $i - 1; $j >= 0; $j--) {
            if($cur_height > $h[$j]) break;
            $base_length++;
        }

        // increment $base_length to the right
        for ($j = $i + 1; $j < $h_length; $j++) {
            if($cur_height > $h[$j]) break;
            $base_length++;
        }

        $rectangle_areas []= $base_length * $cur_height;
    }

    return max($rectangle_areas);
}

$h = [3,4,5,2,1];
print_r(largestRectangle($h));



















