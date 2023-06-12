<?php
    class ItemOwners {
        public static function returnStringAsArray($ItemsArr) { // Takes the string and returns an array of elements seperated by a comma (,).
            $NewArray = array();
    
            $ReplaceStr = str_replace("array(", "", $ItemsArr);
            $ReplaceStr = str_replace(" )", "", $ReplaceStr);
            
            $ItemsArr = explode(",","$ReplaceStr");
            foreach($ItemsArr as $ItemStr){
                $ItemStr = str_replace("'", "", $ItemStr);
                $ItemStr = str_replace('"', '', $ItemStr);
    
                array_push($NewArray, trim($ItemStr));
            }
            return $NewArray;
        }
        
        public static function groupByOwners($StrArr) { // groups
            $NewItemsArr = ItemOwners::returnStringAsArray($StrArr);
    
            if (!empty($NewItemsArr)) {
                $ReturnArr = array();
    
                foreach ($NewItemsArr as $ItemStr) {
                    $ExplodeArr = array();
                    $ExplodeArr = explode(' => ', $ItemStr, 2);
        
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
