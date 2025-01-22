<?php

$wordArr = [
    '1' => 'one',
    '2' => 'two',
    '3' => 'three',
    '4' => 'four',
    '5' => 'five',
    '6' => 'six',
    '7' => 'seven',
    '8' => 'eight',
    '9' => 'nine',
    '10' => 'ten',
    '11' => 'eleven',
    '12' => 'twelve',
    '13' => 'thirteen',
    '14' => 'fourteen',
    '15' => 'fifteen',
    '16' => 'sixteen',
    '17' => 'seventeen',
    '18' => 'eighteen',
    '19' => 'nineteen',
    '20' => 'twenty',
    '30' => 'thirty',
    '40' => 'forty',
    '50' => 'fifty',
    '60' => 'sixty',
    '70' => 'seventy',
    '80' => 'eighty',
    '90' => 'ninety'
];

$arr = array_fill(1,999,true);
$newArr = [];
$newArr['1000'] = 11; //for 'one thousand'

foreach($arr as $key => $value) {
    $spl = str_split($key);
    $word = "";

    if(count($spl) == 3) {
        if($spl[1] != '1') {
            $word .= ($spl[0] ? ($wordArr[$spl[0]] . 'hundred') : '') . ($spl[1] == '0' && $spl[2] == '0' ? '' : ('and' . $wordArr[bcsub($spl[1].$spl[2], $spl[2])])) . ($spl[2] == '0' ? '' : $wordArr[$spl[2]]);
        } else {
            $word .= ($spl[0] ? ($wordArr[$spl[0]] . 'hundred') : '') . ($spl[1] == '0' && $spl[2] == '0' ? '' : ('and' . $wordArr[$spl[1] . $spl[2]]));
        }
    } else if(count($spl) == 2 && $spl[0] != '1') {
        $word .= $wordArr[bcsub($spl[0].$spl[1], $spl[1])] . ($spl[1] == '0' ? '' : $wordArr[$spl[1]]);
    } else if(count($spl) == 2 && $spl[0] == '1') {
        $word .= $wordArr[$spl[0] . $spl[1]];
    } 
    else {
        $word .= $wordArr[$spl[0]];
    }

    $newKey = strlen($word);
    $newArr[$key] = $newKey;
}

echo "The total sum is: " . array_sum($newArr);
