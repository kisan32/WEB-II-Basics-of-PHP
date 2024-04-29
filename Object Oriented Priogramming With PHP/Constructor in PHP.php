<?php
class Concept_of_Constructor
{
    public $name="Default", $age=0, $class="Default"; //initiating with default value if we do not have constructor then we can do this but if we have constructor then we cannot assign this here
    //we have to assign in constructor arguements
    //making constructor
    function __construct($name="Default",$age=0,$class="Default")
    {
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;
    }
    
    //display function
    function Display()
    {
        echo "Name is ".$this->name." Age: ".$this->age." Class: ".$this->class;
    }
}
//create object
$ob = new Concept_of_Constructor();
$ob->Display();
?>