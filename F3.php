<?php
class Palindrome {
public static function isPalindrome($word) {
$new_word = preg_replace("/[^a-zA-Z0-9]/", "", $word);
$new_word = strtolower($new_word);
print $new_word . "<br>";
$Array = str_split($new_word);
$rArray = array_reverse($Array);
$n = 0;
foreach ($Array as $letter) {
    if ($letter == $rArray[$n]) 
    return true;
    $n++;
}
return true;
}
}
if (Palindrome::isPalindrome('Never Odd Or Even'))
echo 'Palindrome';
else
echo 'Not palindrome';
?>