<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //polymorphism
    class shape{
        public function calculatearea(){
            return "area not defined !";

        }
    }
    class circle extends shape{
        public $radius;
        public function calculatearea(){
        return 3.14*($this->radius*$this->radius);

    }
}
class rectangle extends shape{
    public $length;
    public $width;

    public function calculatearea(){
        return $this->length * $this ->width;

    }
} 
    $circle = new circle();
    $circle->radius = 7;
    echo "circle area:". $circle->calculatearea()."<br>";

    $rect = new rectangle();

    $rect->length = 7;
    $rect->width = 10;
    echo "rectangle area:".$rect->calculatearea()."<br>";       
    
    
    
    
    
    
    
    ?>
    
</body>
</html>