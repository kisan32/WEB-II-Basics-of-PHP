<?php
$array=[
    [1,"Kisan","Manager",20000],
    [2,"Rejina","Accountant",15000],
    [3,"Sajina","Sales",8000],
    [4,"Alex","Cleaner",5000]
];
echo "<pre>"; //this will print entire array at once
print_r($array);
echo "</pre>";
echo "<br>one by one printing array<br>";
for($i=0;$i<sizeof($array);$i++)
{
    for($j=0;$j<4;$j++)
    {
        echo $array[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>Printing using Foreach Loop<br>";
foreach($array as $i)
{
    foreach($i as $j)
    {
        echo $j." ";
    }
    echo "<br>";
}
?>