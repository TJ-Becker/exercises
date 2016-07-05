<?php

	if ($argc === 3) {
		$number = mt_rand($argv[1],$argv[2]);
		fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2].  Press 0 to quit. ");
	} else {
		$number = mt_rand(1,100);
		fwrite(STDOUT, "Guess a number between 1 and 100.  Press 0 to quit. ");
	}
	
	$answer = fgets(STDIN);
	$attempts = 1;

	if (($answer != $number) && ($answer != 0)) {
		do {
			if ($answer < $number) {
				fwrite(STDOUT, 'Higher.  Guess again. ');
				$answer = fgets(STDIN);
				$attempts++;
			} else if ($answer > $number) {
				fwrite(STDOUT, 'Lower.  Guess again. ');
				$answer = fgets(STDIN);
				$attempts++;
			}
		} while (($answer != $number) && ($answer != 0));
	} 

	if ($answer == $number) {
		echo "You are correct!  Great guessing.", PHP_EOL;
		echo 'Attempts taken: ' . $attempts, PHP_EOL;
	};

	if ($answer == 0) {
		echo "Exiting.", PHP_EOL;
		exit();
	}