<?php
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
	
	// foreach ($things as $index => $thing) {
	// 	echo "Index: {$index}\n";
	// 	if (is_int($thing)) {
	// 		echo "{$thing} is an integer.\n";
	// 	} else if (is_float($thing)) {
	// 		echo "{$thing} is a float.\n";
	// 	} else if (is_bool($thing)) {
	// 		echo "{$thing} is a boolean.\n";
	// 	} else if (is_array($thing)) {
	// 		echo "{$thing} is an array.\n";
	// 	} else if (is_null($thing)) {
	// 		echo "{$thing} is null.\n";
	// 	} else if (is_string($thing)) {
	// 		echo "{$thing} is a string.\n";
	// 	} else {
	// 		echo "Not sure what this is.\n";
	// 	}
	// }

	// foreach ($things as $index => $thing) {
	// 	if (is_scalar($thing)) {
	// 		echo "Index: {$index}\n";
	// 		echo "{$thing} is scalar.\n";
	// 	}
	// }

	foreach ($things as $index => $thing) {
		if (is_array($thing)) {
			print_r($thing);
		} else {
			echo $thing, PHP_EOL;
		}
	}