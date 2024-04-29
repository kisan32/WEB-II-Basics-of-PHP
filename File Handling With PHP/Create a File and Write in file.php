<?php
$file=fopen("Read.txt","w+");
if(file_exists("Read.txt"))
{
    fwrite($file,"Hello World 2024");
    echo "Write in file Sucessfully";
    echo "<br>Size of file becomes ".filesize("Read.txt");
    copy("Read.txt","Copied.txt");
}
else
{
    echo "File doesnot created";
}
?>