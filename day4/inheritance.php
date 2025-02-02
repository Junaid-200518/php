<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //inheritance
    class animal{
        public function makesound(){
            return "some generic sound";
        }
    }
    class cat extends animal{
        public function makesound(){
            return "meow <br>";
        }
    }
    
    class dog extends animal{
        public function makesound(){
            return "bark <br>";
        }
    }
    $dog = new dog();
    echo $dog->makesound();

    $cat = new cat();
    echo $cat->makesound();
    
    
    
    
    ?>
    
</body>
</html>