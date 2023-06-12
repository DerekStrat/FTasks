<?php
class Palindrome {
    public static function isPalindrome($Word) {
        print $Word . "<br>";
        $ReplaceWord = preg_replace("/[^a-zA-Z0-9]/", "", $Word);

        $StrArr = str_split($ReplaceWord);
        $ReversedArray = array_reverse($StrArr);
        
        $PosCounter = 0;
        foreach ($StrArr as $Char) {
            if ($Char == $ReversedArray[$PosCounter]) {
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
