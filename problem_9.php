<?php

$data = [];
foreach(range(1,999) as $a) {
    foreach(range(1, 999) as $b) {
        foreach(range(1, 999) as $c) {
            if(($a + $b + $c) == 1000) {
                $data[] = "$a + $b + $c";
            }
        }
    }
}

$answer = '';

foreach($data as $d) {
    $newArr = explode('+', $d);

    $py = ($newArr[0] * $newArr[0]) + ($newArr[1] * $newArr[1]);
    if($py == ($newArr[2] * $newArr[2])) {
        $answer = $d;
    }
}

echo "Triplet is: " . $answer;

$finalArr = explode('+', $answer);

echo "Answer is: " . ($finalArr[0] * $finalArr[1] * $finalArr[2]);

