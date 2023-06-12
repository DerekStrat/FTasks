<?php
    class ItemOwners {
        public static function groupByOwners($ItemsArr) {
            if (!empty($ItemsArr)) {
                $ReturnArr = array();
                foreach ($ItemsArr as $Key => $Name) {
                    if (!isset($ReturnArr[$Name])) {
                        $ReturnArr[$Name] = array();
                        array_push($ReturnArr[$Name], $Key);
                    }
                    else {
                        array_push($ReturnArr[$Name], $Key);
                    }
                }
                return $ReturnArr;
            } else {
                return null;
            }
        }
    }

    $ItemsArr = array(
    "Baseball Bat" => "John",
    "Golf ball" => "Stan",
    "Tennis Racket" => "John",
    "Tennis Racket" => "Stan",
    "Cricket Bat" => "Stan",
    "Rugby Ball" => "John"
    );

    echo json_encode(ItemOwners::groupByOwners($ItemsArr));
?>