<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cities = [
    "City1" => 1200000,
    "City2" => 950000,
    "City3" => 1500000
];

$highestPopulationCity = array_keys($cities, max($cities))[0];
echo "The city with the highest population is: $highestPopulationCity";
?>
</body>
</html>