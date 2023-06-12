<?php
// Check Array if elements are valid
    function checkArray($NumArray) {
        $IsNumericVal = true;
        foreach ($NumArray as $Num) {
            if ($IsNumericVal) { // Check if $IsNumericVal still true
                if (is_numeric($Num)) {// check numeric 
                    $IsNumericVal = true;
                } else {
                    $IsNumericVal = false;
                }
            } else {
                return $IsNumericVal;
            }
            
        }
    }
// function with loop
    function addAllLoop($NumArray) {
        $SumFlt = 0;
        if (checkArray($NumArray)) {
            exit("Wrong elements in array.");
        }
        while (!empty($NumArray)) {
            $LoopTotalFlt = 0;
            foreach ($NumArray as $Num) {
                $LoopTotalFlt += $Num;
            }
            array_shift($NumArray);
            $SumFlt += $LoopTotalFlt;
        }
        return $SumFlt;
    }

// function with recursion
    function addAllRecur($NumArray) {
        if (checkArray($NumArray)) {
            exit("Wrong elements in array.");
        }
        $TotalFlt = 0;
        foreach ($NumArray as $Num) {
            $TotalFlt += $Num;
        }
        array_shift($NumArray);
        if (!empty($NumArray)) {
            $TotalFlt += addAllRecur($NumArray);
        }
        return $TotalFlt;
    }

    $NumArray = [1,1,1,1,1]; //5+4+3+2+1=15
    echo addAllLoop($NumArray) . "<br>";
    echo addAllRecur($NumArray);
?>