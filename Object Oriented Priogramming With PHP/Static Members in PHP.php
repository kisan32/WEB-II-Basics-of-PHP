<?php
class members
{
    public static $name;
    function __construct($name)
    {
        self::$name=$name;
    }
    function display()
    {
        echo "Name is ".self::$name;
    }
}
class derived extends members
{
    function display()
    {
        echo members::$name;
    }
}
$obj=new members("Brahmadev");
echo members::$name;
$obj1 = new derived("Nepal");
$obj1->display();
?>