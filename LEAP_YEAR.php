<?php
echo "Leap years between 2010 and 2017 are:\n";

for ($year = 2010; $year <= 2017; $year++) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo $year . "\n";
    }
}
?>
