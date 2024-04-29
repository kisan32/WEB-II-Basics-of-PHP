<?php
$file="Copied.txt";
$f=fopen($file,"r");
if(file_exists($file))
{
    echo fread($f,filesize($file));
}
else
{
    echo "<br>File doesnot Exists";
}
?>