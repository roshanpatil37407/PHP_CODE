<?php
// 1. Variables
$name = "John";
$age = 30;

// 2. Echo/Output
echo "Hello, " . $name . "! You are " . $age . " years old.\n";

// 3. Conditional Statements
if ($age >= 18) {
    echo "You are an adult.\n";
} else {
    echo "You are not yet an adult.\n";
}

// 4. Arrays
$fruits = array("apple", "banana", "cherry");

// 5. Looping (for loop)
echo "Fruits:\n";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "\n";
}

// 6. Function
function add($a, $b) {
    return $a + $b;
}

$sum = add(5, 3);
echo "Sum of 5 and 3 is: " . $sum . "\n";

// 7. Super Global Variables ($_GET)
if (isset($_GET['name'])) {
    $queryName = $_GET['name'];
    echo "Name from URL: " . $queryName . "\n";
}

// 8. User-Defined Functions
function greet($name) {
    echo "Hello, " . $name . "!\n";
}

greet("Alice");

// 9. Includes (Including another PHP file)
include("another_file.php");

// 10. Comments (Single-line and Multi-line)
// This is a single-line comment

/*
This is a
multi-line
comment
*/
?>
