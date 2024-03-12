<?php

function mergeSort($arr) {
    $arrLength = count($arr);
    if ($arrLength <= 1) {
        return $arr;
    }

    $mid = (int)($arrLength / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    $leftLength = count($left);
    $rightLength = count($right);
    $i = $j = 0;

    while ($i < $leftLength && $j < $rightLength) {
        if ($left[$i] < $right[$j]) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    while ($i < $leftLength) {
        $result[] = $left[$i++];
    }

    while ($j < $rightLength) {
        $result[] = $right[$j++];
    }

    return $result;
}

$arr = mergeSort([38, 27, 43, 3, 9, 82, 10]);
print_r($arr);