<?php
function inspect($a) {
    if (is_array($a) && empty($a)) {
        return " is an empty array.";
    } else if (is_array($a)) {
        return " is an array.";
    }

    if (is_bool($a)) {
        if ($a === true) {
            return " is a boolean of 'true'.";
        } else {
            return " is a boolean of 'false'.";
        }
    }

    if (is_null($a)) {
        return " is NULL.";
    }

    if (is_string($a) && empty($a)) {
        return " is an emtpy string.";
    }
    return ' has a type of ' . gettype($a) . ' and a value of ' . $a . '.';
}



// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;
// TODO: After each echo statement, use inspect() to output the variable's type and its value
echo '$num1' . inspect($num1) . PHP_EOL;
echo '$num2' . inspect($num2) . PHP_EOL;
echo '$num3' . inspect($num3) . PHP_EOL;
echo '$num4' . inspect($num4) . PHP_EOL;
echo '$null' . inspect($null) . PHP_EOL;
echo '$bool1' . inspect($bool1) . PHP_EOL;
echo '$bool2' . inspect($bool2) . PHP_EOL;
echo '$string1' . inspect($string1) . PHP_EOL;
echo '$string2' . inspect($string2) . PHP_EOL;
echo '$array1' . inspect($array1) . PHP_EOL;
echo '$array2' . inspect($array2) . PHP_EOL;