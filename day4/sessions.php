<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sessions</title>
</head>
<body>
    <?php
    //sessions
    //creating
    session_start();
    $_SESSION["username"]  = "john";
    $_SESSION["role"] = "hacker";
    
    echo "session has been created ! <br>";
    
    //accessing session variables
    if(isset($_SESSION["username"])){
        echo "welcome". $_SESSION["username"];
    }
    else{
        echo "no active session found!";
    }
    
    //destroying/killing/terinating the session
    session_unset();
    session_destroy();
    echo "<br> session has been terminates ! <br>";

    
    if(isset($_SESSION["username"])){
        echo "welcome". $SESSION["username"];
    }
    else{
        echo "no active session found!";
    }
    
    
    
    
    
    
    ?>
</body>
</html>