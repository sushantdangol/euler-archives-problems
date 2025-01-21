<?php

$sumSquare = 0;
$sumWholeSquare = 0;

foreach(range(1,100) as $a)
{
    $sumSquare += ($a * $a);
    $sumWholeSquare += $a;
}

$result = ($sumWholeSquare * $sumWholeSquare) - $sumSquare;

print_r('The difference is: ' . $result);