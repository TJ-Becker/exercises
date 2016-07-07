<?php

function throwErrorMessage($a, $b, $division = false) {
    if (!is_numeric($a)) {
        fwrite(STDERR, "$a should be a number." . PHP_EOL);
        exit(1);
    }
    if (!is_numeric($b)) {
        fwrite(STDERR, "$b should be a number." . PHP_EOL);
        exit(1);
    }
    if ($division == true) {
        if ($b == 0) {
            fwrite(STDERR, "cannot divide by $b" . PHP_EOL);
            exit(1);
        }
    }
}

function add($a, $b)
{
    throwErrorMessage($a, $b);
    return $a + $b;
}

function subtract($a, $b)
{
    throwErrorMessage($a, $b);
    return ($a - $b);
}

function multiply($a, $b)
{
    throwErrorMessage($a, $b);
    return ($a * $b);
}

function divide($a, $b)
{
    throwErrorMessage($a, $b, true);
    return ($a / $b);
}

function modulus ($a, $b)
{
    throwErrorMessage($a, $b);
    return ($a % $b);
}

echo "For numbers 8 and 4.", PHP_EOL;
echo "sum: " . add(8, 4), PHP_EOL;
echo "difference: " . subtract(8, 4), PHP_EOL;
echo "product: " . multiply(8, 4), PHP_EOL;
echo "quotient: " . divide(8, 0), PHP_EOL;
echo "modulus: " . modulus(8, 4), PHP_EOL;
