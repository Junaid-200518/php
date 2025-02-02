<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
 <?php
 //set a cookie
 $cookiename = 'langpreference';
 $cookievalue = 'french';
 $cookieexpire = time() + (180);

 setcookie($cookiename,$cookievalue,$cookieexpire,"/");

 echo "cookie has been sent....!";

 //accessing the cookie

 if(isset($_COOKIE[$cookiename])){

    echo "<br> yor language preference is :".$_COOKIE[$cookiename];

 }else{

    echo"<br>cookie is not set....!";
 }

    //deleting the cookie

    setcookie($cookiename,$cookievalue, time()-(30), "/");

    echo"<br> cookie has been deleted....!";
    


 
 
 
 
 
 
 
 
 ?>   
</body>
</html>