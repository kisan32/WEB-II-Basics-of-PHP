<?php
 abstract class Base
 {
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }
    abstract function show();
 }

 class derived extends Base
{
    function show()
    {
        echo "Name is ".$this->name;
    }
}

$obj=new derived("Boksi ko ghar");
$obj->show();
?>