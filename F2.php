
<?php
// Task: Write a program that will start at 0 and output the fibonacci sequence up to 34
function loopFibonacci(){
    $total = 0;
    $Value1 = 0;
    $Value2 = 1;
    while ($total <= 34) {
        if ($Value1 == 0)
        print "$Value1,$Value2";
        else
        print ",$Value2";
        $total = $Value1 + $Value2;
        $Value1 = $Value2;
        $Value2 = $total;
    }
}

function recursiveFibonacci($Value1, $Value2) {
    if ($Value1 == 0)
    print "$Value1,$Value2";
    else
    print ",$Value2";
    $total = $Value1 + $Value2;
    $Value1 = $Value2;
    $Value2 = $total;
    if ($total <= 34) 
    recursiveFibonacci($Value1, $Value2);
}

echo loopFibonacci() . "<br>";
echo recursiveFibonacci(0,1);
?>