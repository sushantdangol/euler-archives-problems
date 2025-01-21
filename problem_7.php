<?php

function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}

$key = 1;
$counter = 2;
$data = array();

while($key < 10003) {
    if($key == 10001) {
        echo "Prime: " . $counter;
    } else {
        $counter++;
    }

    if(primeCheck($counter)){
        $data[$key] = $counter;
        $key++;
    }
}