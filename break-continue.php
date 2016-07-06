<?php
//    foreach (range(1, 100) as $number) {
//        if ($number % 2 != 0) {
//            continue;
//        }
//        echo "Odd!", PHP_EOL;
//    }

    foreach (range(1, 100) as $number) {
        echo $number, PHP_EOL;
        if ($number == 10) {
            break;
        }
    }