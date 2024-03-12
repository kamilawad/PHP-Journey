<?php

function decimalToBinary($decimal) {
    $binary = '';
    while ($decimal > 0) {
        $binary .= $decimal % 2;
        $decimal = (int)($decimal / 2);
    }
    return strrev($binary);
}

echo decimalToBinary(16);
