<?php
    header('Access-Control-Allow-Origin: *');

    
    /*
    1) Your php script should accept a POST variable that will serve as the maximum number for the Fibonacci sequence.
    2) Create a new html file that will have an input box where the user can specify the maximum number for the Fibonacci sequence.
    3) Add a button to the html file that will,     
       when clicked take the user input and post it (using javascript) to the php script and then output the result on the screen.
    */


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

    if (isset($_POST["Num"])) {
        $MaxNumInt = $_POST["Num"];
        echo json_encode(loopFibonacci($MaxNumInt));
    } else {
        echo json_encode("Nothing here");
    }
    
    
    // echo recursiveFibonacci(0, 1, $MaxNumInt);
    
?>