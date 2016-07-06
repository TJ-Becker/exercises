<?php
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 15 == 0) {
			echo "fizzbuzz", PHP_EOL;
		} else if ($i % 5 == 0) {
			echo "buzz", PHP_EOL;
		} else if ($i % 3 == 0) {
			echo "fizz", PHP_EOL;
		} else {
			echo $i, PHP_EOL;
		}
	}