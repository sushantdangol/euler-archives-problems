<?php

$value = bcpow(2, 1000);

$arr = str_split($value);

echo "The sum of each digit of the 2^1000 value is: " . array_sum($arr);