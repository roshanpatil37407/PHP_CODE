<?php
function isPalindrome($number) {
    // Convert the number to a string
    $numberStr = (string)$number;
    
    // Reverse the string
    $reverseStr = strrev($numberStr);
    
    // Compare the original string with the reversed string
    if ($numberStr === $reverseStr) {
        return true;
    } else {
        return false;
    }
}

$number = 121; // Change this to the number you want to check
if (isPalindrome($number)) {
    echo $number . " is a palindrome number.";
} else {
    echo $number . " is not a palindrome number.";
}
?>
