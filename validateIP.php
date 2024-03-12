<?php

function validateIP($string) {
    $arr = [];
    $arr = explode(".",$string);
    if (count($arr) == 4) {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] < '0' || $arr[$i] > '255') {
                echo $string ." Not a valid IP@";
                return;
            }
        }
        echo $string ." is a valid IP@";
        return;
    }
    echo $string ." Not a valid IP@";
}

validateIP('192.168.12.1');