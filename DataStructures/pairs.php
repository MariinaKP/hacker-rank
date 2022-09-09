<?php

// https://www.hackerrank.com/challenges/pairs/problem?isFullScreen=true

function pairs($k, $arr) {
    $cache = [];
    for ($i = 0; $i < count($arr); $i++)
    {
        $cache[$arr[$i]] = true;
    }
    $counter = 0;
    for ($i = 0; $i < count($arr); $i++)
    {
        $current = $arr[$i];
        if (array_key_exists($current + $k, $cache)) $counter++;
        if (array_key_exists($current - $k, $cache)) $counter++;
    }
    return $counter / 2;
}
$k = 2;
$arr = [1, 5, 3, 4, 2];
echo pairs($k, $arr);
