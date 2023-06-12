<?php
    class ItemOwners {
        public static function returnStringAsArray($ItemsArr) { // Takes the string and returns an array of elements seperated by a comma (,).
            $NewArray = array();
    
            $str = str_replace("array(", "", $ItemsArr);
            $str = str_replace(" )", "", $str);
            
            $ItemsArr = explode(",","$str");
            foreach($ItemsArr as $element){
                $element = str_replace("'", "", $element);
                $element = str_replace('"', '', $element);
    
                array_push($NewArray, trim($element));
            }
            return $NewArray;
        }
        
        public static function groupByOwners($StrArr) { // groups
            $ItemsArr = ItemOwners::returnStringAsArray($StrArr);
    
            if (!empty($ItemsArr)) {
                $ReturnArr = array();
    
                foreach ($ItemsArr as $str) {
                    $ExplodeArr = array();
                    $ExplodeArr = explode(' => ', $str, 2);
        
                    if (!isset($ReturnArr[$ExplodeArr[1]])) {
                        $ReturnArr[$ExplodeArr[1]] = array();
                        array_push($ReturnArr[$ExplodeArr[1]], $ExplodeArr[0]);
                    } else {
                        array_push($ReturnArr[$ExplodeArr[1]], $ExplodeArr[0]);
                    }
                }
                return $ReturnArr;
    
            } else {
                return null;
            }
        }
    }

    $ItemsArr = 'array(
        "Baseball Bat" => "John",
        "Baseball Bat" => "John",
        "Baseball Bat" => "John",
        "Baseball Bat" => "John",
        "Golf ball" => "Stan",
        "Tennis Racket" => "John",
        "Tennis Racket" => "Lee",
        "Cricket Bat" => "Stan",
        "Rugby Ball" => "John"
        )';
    
    echo json_encode(ItemOwners::groupByOwners($ItemsArr));
?>