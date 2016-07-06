<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return ($a - $b);
}

function multiply($a, $b)
{
    return ($a * $b);
}

function divide($a, $b)
{
    return ($a / $b);
}

function modulus ($a, $b)
{
    return ($a % $b);
}

$a = 10;
$b = 15;

echo "For numbers 8 and 4.", PHP_EOL;
echo "sum: " . add(8, 4), PHP_EOL;
echo "difference: " . subtract(8, 4), PHP_EOL;
echo "product: " . multiply(8, 4), PHP_EOL;
echo "quotient: " . divide(8, 4), PHP_EOL;
echo "modulus: " . modulus(8, 4), PHP_EOL;
