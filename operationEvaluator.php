<?php

function evaluate($expression) {
    $operand1 = '';
    $operand2 = '';
    $operation = '';
    $operationInd = strlen($expression) - 1;
    
    for($i=0;$i<strlen($expression);$i++){
        if ($i<$operationInd) {
            if ($expression[$i]>='0' && $expression[$i]<='9'){
                $operand1 .= $expression[$i];
            }
            elseif ($expression[$i] == '+' || $expression[$i] == '-' || $expression[$i] == '*' || $expression[$i] == '/') {
                $operationInd = $i;
                $operation = $expression[$i];
            }
        }
        else {
            if ($expression[$i]>='0' && $expression[$i]<='9'){
                $operand2 .= $expression[$i];
            }
        }
    }
    $result = evaluateExpression($operation, intval($operand1), intval($operand2));
    echo $result;
}

function evaluateExpression($operation, $operand1, $operand2) {
    switch ($operation){
        case "+" :
            echo $operand1 + $operand2;
            break;
        
        case "-" :
            echo $operand1 - $operand2;
            break;

        case "*" :
            echo $operand1 * $operand2;
            break;

        default :
            echo $operand1 / $operand2;
    }
}

evaluate('15 / 5');