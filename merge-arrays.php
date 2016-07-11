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
//var_dump(arraySearch('Bob', $names, true));
//var_dump(arraySearch('Tina', $names, true));

function compareArrays ($array1, $array2) {
    $value = 0;
    foreach($array1 as $name) {
        if (arraySearch($name, $array2, true) !== false) {
            $value++;
        }
    }
    return $value;
}

function combineArrays ($array1, $array2) {
    $finalArray = [];
    for ($i = 0; $i < count($array1); $i++) {
        if ($array1[$i] != $array2[$i]) {
            array_push($finalArray, $array1[$i], $array2[$i]);
        } else {
            array_push($finalArray, $array1[$i]);
        }
    }
    return $finalArray;
}

//var_dump(compareArrays($names, $compare));
//var_dump(is_int(0));

print_r(combineArrays($names, $compare));
