<?php
interface Demonstration
{
    
    function display();
}
interface Demonstration2
{
    function cal();
}
interface intend
{
    function design();
}
class Derived implements Demonstration, Demonstration2, intend//implementing multiple inheritance using interface
{
    function display()
    {
        echo "Hello World ";
    }
    function cal()
    {
        $sum=2000+24;
        echo $sum;
    }
    function design()
    {
        echo " design of basic php Multiple inheritance";
    }
}
$obj=new Derived();
$obj->display();
$obj->cal();
$obj->design();

?>