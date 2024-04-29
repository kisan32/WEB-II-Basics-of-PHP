<?php
trait Greet
{
    function sayHello()
    {
        echo "Hello";
    }
}
trait respect
{
    function sayHello()
    {
        echo "\nGiving respect";
    }
}
trait Easy
{
    private function Printworld()
    {
        echo "\nThis is in private method";
    }
}
class BaseClass
{
    function sayHello()
    {
        echo "Hello Everyone";
    }
}
class ChildrenClass extends BaseClass
{
    use Greet,respect
    {
        Greet::sayHello insteadOf respect;//this will only allowed to execute Greet trait's sayHello function
        //to use another function as well we have to rename the function to rename function use 'as' keyword
        respect::sayHello as newHello;
        //how can we use a private method of an trait? --> by changing its access modifier

    }
    use Easy
    {
        Easy::Printworld as public;
    }
    // use Greet, respect 'this will causes the error because both the traits has same named methods so to remove this error change name of method'
    // function sayHello()
    // {
    //     echo "Hello World";
    // }
}
$obj= new ChildrenClass();
$obj->sayHello();//According to priority Methods are running Derived class 1st Priority, Trait 2nd Priority and BaseClass has 3rd and last priority
$obj->newhello();
$obj->Printworld();
?>