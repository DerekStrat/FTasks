<?php
// Task: Write a program that will start at 0 and output the fibonacci sequence up to 34
function loopFibonacci($MaxNumInt) {
    $SumValuesInt = 0;
    $Value1Int = 0;
    $Value2Int = 1;
    while ($SumValuesInt <= $MaxNumInt) {
        if ($Value1Int == 0) {
            print "$Value1Int,$Value2Int";
        } else {
            print ",$Value2Int";
        }
        $SumValuesInt = $Value1Int + $Value2Int;
        $Value1Int = $Value2Int;
        $Value2Int = $SumValuesInt;
    }
}

function recursiveFibonacci($Value1Int, $Value2Int, $MaxNumInt) {
    if ($Value1Int == 0) {
        print "$Value1Int,$Value2Int";
    } else {
        print ",$Value2Int";
    }
    $SumValuesInt = $Value1Int + $Value2Int;
    $Value1Int = $Value2Int;
    $Value2Int = $SumValuesInt;
    if ($SumValuesInt <= $MaxNumInt) {
        recursiveFibonacci($Value1Int, $Value2Int, $MaxNumInt);
    }
}

$MaxNumInt = 34;
echo loopFibonacci($MaxNumInt) . "<br>";
echo recursiveFibonacci(0, 1, $MaxNumInt);
?>