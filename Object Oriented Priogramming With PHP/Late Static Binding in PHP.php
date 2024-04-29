<?php
class First
{
    public Static $name="Bastiraj ";
    function display()
    {
        echo self::$name;//it will give parent class value
        echo static::$name;//it will give Derived class value
    }
}
class Second extends First
{
    public static $name="Chui Prasad";
}
$obj=new Second();
$obj->display();
?>