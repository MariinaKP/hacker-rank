<?php

// https://www.hackerrank.com/challenges/flatland-space-stations/problem?h_r=internal-search&isFullScreen=true

function flatlandSpaceStations($n, $c) {
    $cities = [];
    $leftmost_stationless_citiest_count = 0;
    $rightmost_stationless_citiest_count = 0;
    $center_stationless_citiest_count = 0;
    $center_stationless_citiest = [];
    $all_stationless_citiest = [];

    if ($n[0] == $n[1]) {
        return 0;
    }

    for ($i = 0; $i < $n[0]; $i++) {
        $cities[$i] = in_array($i, $c);
    }

    for ($i = 0; $i < count($cities); $i++) {
        if (!$cities[$i]) {
            $leftmost_stationless_citiest_count++;
        }
        else {
            array_push($all_stationless_citiest, $leftmost_stationless_citiest_count);
            break;
        }
    }

    for ($i = count($cities) - 1; $i >= 0; $i--) {
        if (!$cities[$i]) {
            $rightmost_stationless_citiest_count++;
        }
        else {
            array_push($all_stationless_citiest, $rightmost_stationless_citiest_count);
            break;
        }
    }

    for ($i = $leftmost_stationless_citiest_count; $i < $n[0]; $i++) {
        if (!$cities[$i]) {
            $center_stationless_citiest_count++;
        } else {
            array_push($center_stationless_citiest, $center_stationless_citiest_count);
            $center_stationless_citiest_count = 0;
        }
    }

    $centermost_stationless_citiest_count = ceil(max($center_stationless_citiest) / 2);
    array_push($all_stationless_citiest, $centermost_stationless_citiest_count);
    return max($all_stationless_citiest);
}

$n = [5,2];
$c = [0,4];

print_r(flatlandSpaceStations($n, $c));
