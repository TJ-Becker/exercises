<?php
$uncapitalized = ['arches', 'badlands', 'carlsbad', 'denali'];
$to_capitalize = ['denali', 'badlands'];

function capitalize($uncapitalized, $to_capitalize)
{
    foreach ($uncapitalized as $index => $element) {
        if (in_array($element, $to_capitalize)) {
            $uncapitalized[$index] = ucfirst($element);
            $capitalized[] = $uncapitalized[$index];
        } else {
            $capitalized[] = $element;
        }
    }
    return $capitalized;
}

var_dump(capitalize($uncapitalized, $to_capitalize));

