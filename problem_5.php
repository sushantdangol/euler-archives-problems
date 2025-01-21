<?php

$minRange = 1;
$maxRange = 20;
$counter = $maxRange;

while($counter > $minRange){
	
	$success = true;
	for($i = $minRange; $i <= $maxRange; $i++){
		if($counter % $i != 0){
			$success = false;
			break;
		}
	}
	if($success){
		//we nullify the check condition for the while
		echo "\n Max positive number is : $counter \n";
		$counter = $minRange;

	}else{ $counter++; }
}
