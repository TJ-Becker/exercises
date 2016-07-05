<?php
	$peeps = ['TJ', 'Brandon', 'Anthony', 'Rob'];
	$length = count($peeps);
	echo $length, PHP_EOL;
	$number = 0;
	do {
		echo $peeps[$number], PHP_EOL;
		$number++;
	} while ($number < $length);