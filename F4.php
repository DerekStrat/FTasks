<?php
    class ItemOwners {
        public static function groupByOwners($ItemsArr) {
            if (!empty($ItemsArr)) {
                $ReturnArr = array();
                foreach ($ItemsArr as $ItemStr => $NameOfOwner) {
                    if (!isset($ReturnArr[$NameOfOwner])) {
                        $ReturnArr[$NameOfOwner] = array();
                        array_push($ReturnArr[$NameOfOwner], $ItemStr);
                    }
                    else {
                        array_push($ReturnArr[$NameOfOwner], $ItemStr);
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
    "Cricket Bat" => "Stan",
    "Rugby Ball" => "John"
    );

    echo json_encode(ItemOwners::groupByOwners($ItemsArr));
?>
