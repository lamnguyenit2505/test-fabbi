<?php
	$arr = [1,2,3,4,5,6,7,4,9,10,10,10,11,11,11];
	$dem = count($arr) / 3;
	$arrSort = [];
	for ($i = 0; $i < count($arr)-2 ; $i++) {
		 for ($j = $i+1; $j < count($arr) - 1 ; $j++) {
		 	for ($k = $i+2; $k < count($arr) ; $k++) {
		 		if($j - $i == $dem && $k - $j == $dem){
		 			echo "$arr[$i] , $arr[$j] , $arr[$k] <br>";
		 			array_push($arrSort, $arr[$i] , $arr[$j] , $arr[$k]);
		 		}
		 	}
		 }
	}

	echo '<pre>';
	print_r($arrSort);