<?php
$k = 50;
function getDivArr($n)
{
    $cnt = 0; 
    for ($i = 1; $i <= sqrt($n); $i++) 
    { 
        if ($n % $i == 0) { 
            if ($n / $i == $i) 
            $cnt++; 

            else 
                $cnt = $cnt + 2; 
        } 
    } 
    return $cnt; 
}

$natural = 1;
$flag = false;

while($flag == false) {

    $sum = (($natural * ($natural + 1))/2);

    if(getDivArr($sum) == $k) {
        $flag = true;
        echo "Number with $k divisors is: " . $sum;
    } else {
        $natural++;
    }
}
