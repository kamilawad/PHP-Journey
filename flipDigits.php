<?php

function flipDigits($number) {
    $str = '';
    while ($number>0) {
        $str .= $number%10;
        $number = (int) ($number/10);
    }
    echo (int) $str;
}

flipDigits(541);