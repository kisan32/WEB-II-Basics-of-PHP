<?php
class Hello
{
    public $name="Method";
    function display()
    {
        echo " Displays Name ".$this->name;
    }
}
class World extends Hello
{
    public $name="Overriding";
    function display()
    {
        echo " Shows Name ".$this->name;
    }
}
$obj=new World();//to call the exact method and properties we have make object of the specific classs which has that method and perporties
echo $obj->name;
$obj1=new Hello();
echo " ".$obj1->name;
$obj->display();
$obj1->display();
?>