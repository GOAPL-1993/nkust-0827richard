<?php
	
	$scores = array(65, 95, 98, 72, 85, 65, 24, 67);

	$total = array_sum($scores);
	$score = $total / count($scores);

	echo "總分：". $total . "分<br>";
	echo "平均：". $score . "分<br>";
	echo "你的等級是";
	if ($score>=90) {
		echo "A！";
	} else if ($score>=80) {
		echo "B！";
	} else if ($score>=70) {
		echo "C！";
	} else if ($score>=60) {
		echo "D！";
	} else {
		echo "F！";
	}
?>

