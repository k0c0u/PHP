<?php
//1
$a = rand(-100,100);
$b = rand(-100,100);
echo "a = $a<br>b = $b<br>";
if ($a >= 0 && $b >= 0) {
    echo "a - b = " . ($a-$b);
} elseif ($a < 0 && $b < 0) {
    echo "a * b = " . ($a*$b);
} else {
    echo "a + b = " . ($a+$b);
}

//2
$c = rand(0,15);

switch ($c) {
    case 0:
        echo "0";
    case 1:
        echo "1";
    case 2:
        echo "2";
    case 3:
        echo "3";
    case 4:
        echo "4";
    case 5:
        echo "5";
    case 6:
        echo "6";
    case 7:
        echo "7";
    case 8:
        echo "8";
    case 9:
        echo "9";
    case 10:
        echo "10";
    case 11:
        echo "11";
    case 12:
        echo "12";
    case 13:
        echo "13";
    case 14:
        echo "14";
    case 15:
        echo "15";
}

//3

function add($a, $b) {
    return $a + $b;
}

function reduce($a, $b) {
    return $a - $b;
}

function divide($a, $b) {
    return $a / $b;
}

function multiply($a, $b) {
    return $a * $b;
}

//4

$arg1 = rand(0,9);
$arg2 = rand(0,9);
$operations = array("+", "-", "*", "/");
$operation = $operations[rand(0,3)];

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return add($arg1, $arg2);
        case "-":
            return reduce($arg1, $arg2);
        case "*":
            return multiply($arg1, $arg2);
        case "/":
            return divide($arg1, $arg2);
    }
}