<?php

$pal = [];

foreach(range(100,999) as $a) {
    foreach(range(999, 100) as $b) {
        if(palindromeCheck($a*$b)) {
            $pal[] = $a * $b;
        }
    }
}

echo max($pal);

function palindromeCheck($number) {
    $temp = $number;  
    $new = 0;  
    while (floor($temp)) {  
        $d = $temp % 10;  
        $new = $new * 10 + $d;  
        $temp = $temp/10;  
    }  
    if ($new == $number){  
        return 1;  
    }
    else{
        return 0;
    }
}
