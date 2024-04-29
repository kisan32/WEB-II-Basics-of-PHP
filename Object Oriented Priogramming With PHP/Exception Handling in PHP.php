<?php
$a=10;
$b=0;
try
{
    if($b==0)
    {
        throw new Exception("Error happened");
    }
    else
    {
        $div=$a/$b;
        echo "Division is ".$div;
    } 
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>