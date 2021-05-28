<?php 
	$arr = [1,2,3,4,5,6,7,7];
	$max2 = $arr[0];
	$max = $arr[0];
	for ($i = 0; $i < count($arr); $i++) {
		if ($max < $arr[$i]) {
			$max2  = $max;
			$max = $arr[$i];
		}
		else{
			if ($arr[$i] > $max2) {
				$max2 = $arr[$i];
			}
		}
	}
	$sum = $max + $max2;
	echo "Tổng của 2 số lớn nhất trong mang là: " . $sum;
	