<?php
// Function to validate an email address using regular expression
function validateEmail($email) {
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    return preg_match($pattern, $email);
}

// Function to validate a URL using regular expression
function validateURL($url) {
    $pattern = "/^(https?:\/\/)?([a-zA-Z0-9.-]+\.)*[a-zA-Z]{2,}(\/[a-zA-Z0-9-._~:?#[\]@!$&'()*+,;=]*)?$/";
    return preg_match($pattern, $url);
}

$email = "user@example.com"; // Change this to the email address you want to validate
if (validateEmail($email)) {
    echo $email . " is a valid email address.\n";
} else {
    echo $email . " is not a valid email address.\n";
}

$url = "https://www.example.com"; // Change this to the URL you want to validate
if (validateURL($url)) {
    echo $url . " is a valid URL.\n";
} else {
    echo $url . " is not a valid URL.\n";
}
?>
