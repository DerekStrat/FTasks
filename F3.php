<?php
class Palindrome {
    public static function isPalindrome($Word) {
        $ReplaceWord = preg_replace("/[^a-zA-Z0-9]/", "", $Word);
        $EditWord = strtolower($ReplaceWord);

        print $EditWord . "<br>";

        $StrArr = str_split($ReplaceWord);
        $ReversedArray = array_reverse($StrArr);
        $PosCounter = 0;
        foreach ($StrArr as $Letter) {
            if ($Letter == $ReversedArray[$PosCounter]) {
                return true;
            } 
            $PosCounter++;
        }
        return true;
    }
}

if (Palindrome::isPalindrome("Don't nod")) {
    echo 'Palindrome';
} else {
    echo 'Not palindrome';
}
?>