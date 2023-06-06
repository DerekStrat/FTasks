<?php
class ItemOwners {
public static function groupByOwners($ItemsArr) {
    print_r($ItemsArr);
    if (!empty($ItemsArr)) {
        $names_array = array_unique($ItemsArr);
        $return_array = array();
        foreach ($names_array as $element) {
            $empty_array = array();
            reset($ItemsArr);
            while ($name = current($ItemsArr)) {
                if ($name == $element) {
                    array_push($empty_array, key($ItemsArr));
                }
                next($ItemsArr);
            }
            $return_array[$element] = $empty_array;
        }
        return $return_array;
    }
    else
    return null;
}
}

$ItemsArr = array(
"Baseball Bat" => "John",
"Golf ball" => "Stan",
"Tennis Racket" => "John",
"Cricket Bat" => "Stan",
"Cricket Bat" => "John",
"Rugby Ball" => "John"
);
// echo key($ItemsArr);
echo json_encode(ItemOwners::groupByOwners($ItemsArr));
?>