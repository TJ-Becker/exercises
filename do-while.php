<?php
	$number = 0;
	$squared = 2;
	do {
		var_dump($number);
		$number += 2;
	} while ($number < 100);

	do {
		var_dump($number);
		$number -= 5;
	} while ($number >= 10);

	do {
		var_dump($squared);
		$squared *= $squared;
	} while ($squared < 1000000);