<?php

function processRule($n)
{
    if($n % 2 == 0) {
        return $n/2;
    } else {
        return ((3*$n) + 1);
    }
}

$longestChainArr = [];

foreach(range(999999, 1) as $a) {
    $data = [];
    $n = $a;
    
    while($n != 1) {
        $x = processRule($n);

        $data[] = $x;

        $n = $x;
    }

    $longestChainArr[$a] = count($data);
}

echo "The longest chain is: " . array_search(max($longestChainArr), $longestChainArr);