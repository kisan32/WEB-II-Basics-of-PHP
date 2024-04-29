<?php
class Access_M
{
    public $a="Hello";
    protected $b="World";
    private $c="2024";
    function show2()
    {
        echo "<br>Accessing Public Variable in class Itself ".$this->a;
        echo "<br>Accessing Protected Variable in class Itself ".$this->b;
        echo "<br>Accessing Private Variable in class Itself ".$this->c;
    }
}
class derived extends Access_M
{
    function show()
    {
        echo "<br>Accessing Public Variable in Derived class ".$this->a;
        echo "<br>Accessing Protected Variable in Derived class ".$this->b;
        //echo "<br>Accessing Private Variable in Derived class ".$this->c; --> give error cannot accessed from derived class
    }
}
$obj = new derived();
echo "Accessing Public Variable Outside class ".$obj->a;
//echo "Accessing Protected Variable Outside class ".$obj->b; ---> this will give error because it cannot be accessed outside except class itseflf or derived class
$obj->show();
$obj->show2();
//echo "<br>Accessing Private Variable outside class ".$obj->c; ---> give error cannot accessed from outside class
?>