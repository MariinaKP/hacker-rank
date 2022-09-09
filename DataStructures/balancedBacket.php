<?php

// https://www.hackerrank.com/challenges/balanced-brackets/problem?isFullScreen=true

function isBalanced($s) {
    $stack = [];

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == '(' || $s[$i] == '{' || $s[$i] == '[') {
            array_push($stack, $s[$i]);
        } else {
            if (empty($stack)) {
                return "NO";
            } else {
                $top = array_pop($stack);
                if ($s[$i] == ')' && $top != '(') {
                    return "NO";
                } elseif ($s[$i] == '}' && $top != '{') {
                    return "NO";
                } elseif ($s[$i] == ']' && $top != '[') {
                    return "NO";
                }
            }
        }
    }
    if (empty($stack)) {
        return "YES";
    } else {
        return "NO";
    }
}
$s = '{{[[(())]]}}';
echo isBalanced($s);
