<?php

function filterNumbers($string) {
    $numbers = '';
    $numbers_arr = [];
    for ($i=0;$i<strlen($string);$i++) {
        if ($string[$i]>='0' && $string[$i]<='9') {
            $numbers .= $string[$i];
        }
    }
    if ($numbers) {
        for ($j=0;$j<strlen($numbers);$j++) {
            array_push($numbers_arr, intval($numbers[$j]));
        }
    }
    sort($numbers_arr);
    return $numbers_arr;
}

print_r(filterNumbers('hpd12aq3@8w$5'));