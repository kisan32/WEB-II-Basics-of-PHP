<?php

echo "Enter 1 for Addition<br>";
echo "Enter 2 for Subtraction<br>";
echo "Enter 3 for Multiplication<br>";
echo "Enter 4 for Division<br>";
$c = 3;
switch ($c)
 {
    case '1':
        $sum=4+6;
        echo "The Sum is $sum";
        break;

    case '2':
        $sub=6-4;
        echo "The Subtraction is $sub";
        break;
    case '3':
        $mul=6*4;
        echo "The Multiplication is $mul";
        break;
    case '4':
        $div=6/2;
        echo "The Division is $div";
        break;
    default:
        echo "Enter the Valid Value";
}
?>