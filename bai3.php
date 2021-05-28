<?php 
	$arr = [1,23,4,56,1,8,4,5,12,5,5];
	$min = abs($arr[1] - $arr[0]);
	for ($i = 0; $i < count($arr) - 1; $i++) {
		for ($j = $i + 1; $j < count($arr) ; $j++) {
			if (abs($arr[$j] - $arr[$i]) < $min) {
				$min = abs($arr[$j] - $arr[$i]);
			}
		}
	}
	$arrMin = [];
	for ($i = 0; $i < count($arr) - 1; $i++) {
		for ($j = $i + 1; $j < count($arr) ; $j++) {
			if (abs($arr[$j] - $arr[$i]) == $min) {
				echo $arr[$i] . "," . $arr[$j]. "<br>";
				array_push($arrMin, [$arr[$i] , $arr[$i]]);
			}
		}
	}
	echo '<pre>';
	print_r($arrMin);
	
	
