<?php

$n = 2000000;

$primeNumbers = array_fill(0, $n+1, true);

for($i = 2; $i*$i <= $n; $i++) {
    if($primeNumbers[$i] == true) {
        for($j = $i * $i; $j <= $n; $j += $i) {
            if($primeNumbers[$j]) {
                $primeNumbers[$j] = false;
            }
        }
    }
}

$sum = 0;

for($i = 2; $i <= $n; $i++) {
    if($primeNumbers[$i]) {
        $sum += $i;
    }
}

echo "The sum of prime numbers below $n is: " . $sum;