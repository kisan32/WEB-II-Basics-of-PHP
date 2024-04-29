<?php
$array=array(2,3,4,5,6,7,8,9,5,3,6,7,8);
foreach($array as $i)
{
    echo $i." ";
}
echo "<br>".sizeof($array)."<br>";
echo count($array);
if(in_array(4,$array))
{
    echo "<br>yes we find";
}
echo "<br>".array_search(7,$array);
?>