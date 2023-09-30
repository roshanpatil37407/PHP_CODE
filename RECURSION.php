<?php
function printTable($number, $counter = 1) {
    if ($counter <= 10) {
        echo $number . " x " . $counter . " = " . ($number * $counter) . "\n";
        $counter++;
        printTable($number, $counter);
    }
}

$givenNumber = 5; // Change this to the number for which you want to print the table
echo "Table of " . $givenNumber . ":\n";
printTable($givenNumber);
?>
