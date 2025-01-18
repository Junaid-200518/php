<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sum = 0;
for ($i = 2; $i <= 100; $i += 2) {
    $sum += $i;
}
echo "The sum of all even numbers between 1 and 100 is: $sum";
?> 
</body>
</html>