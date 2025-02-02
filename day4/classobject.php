<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //classes and objects
    class car{
        public $brand; //property of the car
        public $color; 
        //private
        //protected
        public function startengine(){
            return "the engine is starting...";
        }
    }
    
    //create object
    $car =new car();
    $car->brand = "mercedes";
    $car-> color = "red";

    echo "car brand:".$car->brand. "<br>";
    echo $car->startengine();
    

    
    
    
    
    
    
    
    ?>
    
</body>
</html>