<?php


    $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
    $physicistsString = explode(', ', $physicistsString);

    function humanizedList($message, $arrayList, $alphabetize = false) {
        if ($alphabetize) {
            sort($arrayList);
        }
        $last = end($arrayList);
        foreach ($arrayList as &$value) {
            if ($value === $last) {
                $value = "and " . $value . ". \n";
            }
        }
        $newString = implode(', ', $arrayList);
        echo $message . $newString;
    }

    humanizedList("Some of the most famous fictional theoretical physicists are ", $physicistsString, true);