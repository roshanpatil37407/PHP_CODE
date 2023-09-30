<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number <= 3) {
        return true;
    }
    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }
    $i = 5;
    while ($i * $i <= $number) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }
    return true;
}

$count = 0; // Initialize a count to keep track of prime numbers
$number = 2; // Start with the first prime number

echo "The first 50 prime numbers are:";

while ($count < 50) {
    if (isPrime($number)) {
        echo " " . $number;
        $count++;
    }
    $number++;
}
?>
