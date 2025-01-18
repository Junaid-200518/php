<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^a-z0-9]/', '', $string));
    return $string === strrev($string);
}

$testString = "Madam";
if (isPalindrome($testString)) {
    echo "\"$testString\" is a palindrome.";
} else {
    echo "\"$testString\" is not a palindrome.";
}
?>
</body>
</html>