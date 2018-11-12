<?php
	$i = 1;
	$previousSums = [0];
	echo $i;
	while ($i <= 1000000){
		array_push($previousSums, $i);
		$i = $previousSums[0] + $previousSums[1];
		echo $i\n;
		array_shift($previousSums);
	}
?>