<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //array and functions

    //array indexed

    $fruits = ["banana","apple","cherry","orange"];
    echo "selected fruit :". $fruits[1];

    foreach($fruits as $fruits){
        echo "<br> fruit :".$fruits;
    }


    //Associative array

    echo"<br>";
    $ages =["John" => 25, "Raj" => 18, "Alice" => 22];
    echo"<br> selected age :".$ages["Alice"];
    foreach($ages as $name => $age){
       echo "<br>".$name. "is ". $age." years old.";
    }


    //multi dimensional arrays

    echo"<br>";
    $students=[
        ["john",25,false],
        ["raj",18,true],
        ["alice",22,false]
    ];

echo"<br> student 1 is present in the class :".$students[1][2];

//array manipulation

$classroom = ["stuart","ben","rick"];
foreach($classroom as $student){
    echo"<br> student :".$student;
}

//adding elements
echo"<br>";
$classroom[]= "Alen";
array_push($classroom, "xavier");

foreach($classroom as $student){
    echo "<br> student:".$student;
}

//updating
echo "<br>";
$classroom[2] = "raj";
foreach($classroom as $student){
echo "<br> student :".$student;
}

//counting elements
echo"<br><br>";
echo "number of elements in he array are:".count($classroom);

//deleting elements
unset($classroom[1]);
print_r($classroom);

//re-indexing elements
$classroom = array_values($classroom);
echo"<br>";
print_r($classroom);













   ?>
</body>
</html>