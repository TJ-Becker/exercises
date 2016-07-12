<?php
$letters = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];

function sortArray($array)
{
    for ($j = 0; $j < count($array); $j++) {
        for ($i = 0; $i < count($array) - 1; $i++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$j];
                $array[$j] = $array[$i];
                $array[$i] = $temp;
            }
        }
    }
    return $array;
}

print_r(sortArray($letters));