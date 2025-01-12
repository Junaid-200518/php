<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


       //control structures
       $name = "ambar";
       if($name == "junaid"){
        echo $name." name is correct";
       }
       else{
        echo $name." name is not correct";
       }


        //condtional statement if elseif-----else
        $marks=91;          
        if($marks >= 80){
            echo "<br> you got grade A";
        }
        elseif($marks >= 60){
            echo "<br> you got grade B";
        }
        elseif($marks >=40){
            echo"<br> you got grade C";
        }
        else {
            echo "<br> you got grade F";
        }


        //conditional statement switch
        echo "<br><br>";

        $day = "sunday";
        switch($day){
            case "sunday";
              echo "its sunday !!!";
              break;

              case "monday";
              echo "its monday !!!";
              break; 

              case "tuesday";
              echo "its tuesday !!!";
              break;

              case "wednesday";
              echo "its wednesday !!!";
              break;

              case "thursday";
              echo "its thursday !!!";
              break;

        }


        //Iteration control structure while loop
        echo"<br>";

        $count = 1;
        while($count <= 10){
        echo "<br> count is ". $count;
        $count++;
    }

        echo"<br>";

        $num = 1;
        do{
            echo"<br> number is".$num;
            $num++;
        }
        while($num <= 5);


        echo"<br>";
        for($i=1; $i<=6; $i++){
            echo "<br> for loop number:".$i;       
        }

        
        echo "<br>";
        $array=["Red","green","blue","yellow","black"];
        foreach($array as $color){
            echo "<br> color:". $color;
        }


        





    ?>
</body>
</html>