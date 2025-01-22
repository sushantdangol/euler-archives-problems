<?php
/**
 * Quick Explanation: If grid size is 20 X 20, then the maximum number of right turns and down turns is 20 each.
 * 
 * Great video for reference: https://www.youtube.com/watch?v=2X50S81565g
 */
$grid = 20;

function factorial($n) 
{
    $result = 1;
    for($i = 1; $i<=$n;$i++) {
        $result *= $i;
    }

    return $result;
}

$numberChoices = $grid + $grid;
$numberDown = $grid;
$numberRight = $grid;

$calc = (factorial($numberChoices)) / (factorial($numberDown) * factorial($numberRight));

echo "The number of paths for a $grid X $grid to reach the bottom is: " . $calc;
