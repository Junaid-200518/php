<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Directory handling

    //creater a Directory
    if(!is_dir("PHPDAY3_directory")){
        mkdir("PHPDay3_Directory");
        echo"Directory Created";

    }
     else{
        echo "directory already exists !";

     }
      echo"<br>"
;

//check if the directory exists
if(is_dir("PHPDAY3_Directory")){
    echo"directory already exists";

} 
else{
    echo "Directory does not exists";
}
//list the file inside the folder
$files = scandir("PHPDay3_Directory");
foreach($files as $file){
    echo $file."<br>";
}

//change the directory
echo "current directory :" . getcwd();
chdir ("PHPDAY3_Directory");
echo "<br> new current directory: ". getcwd();

echo"<br>";

//delete thr files inside the directory

$delete_files = scandir(".");
foreach($delete_files as $file){
    if($file!=="."&& $file !==".."){
        unlink($file);
    
    }
    echo "files deleted!";
}
echo"<br>";

//delete directory
chdir("..");
echo "<br> current directory :".getcwd();
if(is_dir("PHPDAY3_Directory")){
    rmdir("PHPDAY3_Directory");
    echo "directory removed";
}
else{
    echo "directory does not exists!";
}
echo"<br>";












    ?>
</body>
</html>