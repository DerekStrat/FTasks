<?php
// Check Array if elements are valid
    function checkArray($Array) {
        $number_array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
        foreach ($Array as $element) {
            if (in_array($element, $number_array) == false)
            return true;
        }
        return false;
    }
// function with loop
    function addAllLoop($Array) {
        $n = 0;
        $sum = 0;
        if (checkArray($Array))
            exit("Wrong elements in array.");
        while (!empty($Array)) {
            $total = 0;
            foreach ($Array as $number) {
                $total += $number;
            }
            unset($Array[$n]);
            $n++;
            $sum += $total;
        }
        return $sum;
    }

// function with recursion
    function addAllRecur($Array) {
        if (checkArray($Array))
        exit("Wrong elements in array.");
        $total = 0;
        foreach ($Array as $value) {
            $total += $value;
        }
        array_shift($Array);
        if (!empty($Array)) {
            $total += addAllRecur($Array);
        }
        return $total;
    }

    $Array = [1,1,1,1,1]; //5+4+3+2+1=15
    echo addAllLoop($Array) . "<br>";
    echo addAllRecur($Array);
?>