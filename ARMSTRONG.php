<?php
function isArmstrong($number) {
    // Convert the number to a string to count its digits
    $numStr = (string)$number;
    $numDigits = strlen($numStr);
    
    // Initialize a variable to store the sum of digits raised to the power of the number of digits
    $sum = 0;
    
    // Calculate the sum of digits raised to the power of the number of digits
    for ($i = 0; $i < $numDigits; $i++) {
        $digit = (int)$numStr[$i]; // Convert the digit back to an integer
        $sum += pow($digit, $numDigits);
    }
    
    // Check if the sum is equal to the original number
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

// Test the function
$number = 153; // Change this to the number you want to check
if (isArmstrong($number)) {
    echo $number . " is an Armstrong number.";
} else {
    echo $number . " is not an Armstrong number.";
}
?>
