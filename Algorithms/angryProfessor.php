<?php

// https://www.hackerrank.com/challenges/angry-professor/problem?h_r=internal-search&isFullScreen=true

function angryProfessor($k, $a) {
    $late = 0;
    for($i = 0; $i < count($a); $i++) {
        if($a[$i] > 0) {
            $late++;
        }
    }
    return ($late >= $k) ? "NO" : "YES";
}

$k = 4;
$a = [-93, -86, 49, -62, -90, -63, 40, 72, 11, 67];
echo angryProfessor($k, $a);
