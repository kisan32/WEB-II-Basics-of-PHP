<?php
class A
{
    public $name,$age,$salary;
    function __construct($name,$age,$salary)
    {
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    function info()
    {
        echo "<h1> Employee Information </h1>";
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Salary: ".$this->salary;
    }

}
class B extends A//single inheritance
{
    public $ta=12000,$pbill=500;
    function info()
    {
        $total_Salary =$this->salary + $this->ta + $this->pbill;
        echo "<h1> Manager Information </h1>";
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
        echo "Salary: ".$total_Salary;
    }
}

$obj1=new A("Ram Hari",22,22000);
$obj2=new B("Kisan",22,40000);
$obj2->info();
$obj1->info();
?>