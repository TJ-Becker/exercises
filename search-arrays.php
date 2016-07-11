<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function arraySearch ($name, $array, $bool) {
    $value = array_search($name, $array, $bool);
    if (is_int($value)) {
        return true;
    } else {
        return false;
    }
}
var_dump(arraySearch('Bob', $names, true));
var_dump(arraySearch('Tina', $names, true));

function compareArrays ($array1, $array2) {
    $value = 0;
    foreach($array1 as $name) {
        if (arraySearch($name, $array2, true) !== false) {
            $value++;
        }
    }
    return $value;
}

var_dump(compareArrays($names, $compare));
var_dump(is_int(0));