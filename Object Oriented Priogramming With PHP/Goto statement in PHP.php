<?php
for($i=0;$i<=5;$i++)
{
    if($i==3)
    {
        goto point;
    }
    echo $i." ";
}
point: echo "This is the point";
?>