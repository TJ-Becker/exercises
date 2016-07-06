<?php
	fwrite(STDOUT, "Pick a starting number: ");
	$starting = trim(fgets(STDIN));

	fwrite(STDOUT, "Pick an ending number: ");
	$ending = trim(fgets(STDIN));

	fwrite(STDOUT, "Enter an amount to increment by: ");
	$increment = trim(fgets(STDIN));

	for ($i = $starting; $i <= $ending; $i += $increment) {
		echo $i, PHP_EOL;
	}