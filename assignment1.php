<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
      //this is single line comment
      //echo"hello world";

      
      echo "comments example!";
      echo"this is a comment example";


      //scalar types
      $name="junaid";
      $age=18;
      $time=3.45;
      $class=true;

      //compound types
      $student_arr=array("junaid,het,yash");
      class student{
        public $marks;
      }
      $stud=new student();
      $stud->name="";


      //special types
      $null_var=null;

      echo"<br> string:",$name;
      echo"<br> integer:",$age;
      echo"<br> float:",$time;
      echo"<br> boolean:",$class;
      echo"<br> array:",$student_arr[0];
    
      echo"<br> Null:",$null_var;


      /*this is multiline comments
      developed for php session*/
 ?>   
</body>
</html>