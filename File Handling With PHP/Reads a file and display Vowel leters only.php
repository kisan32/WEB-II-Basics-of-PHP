<?php
$fname="Read.txt";
$f = fopen($fname,"r+");
if(file_exists($fname))
{
    for($i=0;$i<filesize($fname);$i++)
    {
        $c= strtolower(fgetc($f));
        if($c=='a' || $c=='e' || $c=='i' || $c=='o' || $c=='u')
        {
            echo $c." ";
        }
        
    }
}
?>