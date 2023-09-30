<?php
// Sample string
$string = "Hello, World! This is a sample string.";

// 1. String Length
$length = strlen($string);
echo "1. String Length: " . $length . "\n";

// 2. String to Uppercase
$uppercaseString = strtoupper($string);
echo "2. Uppercase String: " . $uppercaseString . "\n";

// 3. String to Lowercase
$lowercaseString = strtolower($string);
echo "3. Lowercase String: " . $lowercaseString . "\n";

// 4. Substring
$substring = substr($string, 7, 5); // Get "World"
echo "4. Substring: " . $substring . "\n";

// 5. Replace
$replacedString = str_replace("sample", "modified", $string);
echo "5. Replaced String: " . $replacedString . "\n";

// 6. String Splitting (Explode)
$words = explode(" ", $string);
echo "6. String Splitting (Explode):\n";
print_r($words);

// 7. String Joining (Implode)
$joinedString = implode("-", $words);
echo "7. String Joining (Implode): " . $joinedString . "\n";

// 8. Trim Leading and Trailing Whitespace
$whitespaceString = "   Trim Me   ";
$trimmedString = trim($whitespaceString);
echo "8. Trimmed String: " . $trimmedString . "\n";

// 9. String Comparison
$string1 = "apple";
$string2 = "banana";
$comparison = strcmp($string1, $string2);
echo "9. String Comparison: " . $comparison . "\n";

// 10. String Search
$searchString = "is";
$position = strpos($string, $searchString);
echo "10. String Search: '" . $searchString . "' found at position " . $position . "\n";
?>
