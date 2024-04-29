<?php
require 'First.php';
require 'Second.php';
class NamespaceConcept
{
    

}
//making object of both classes
$obj=new First\test();//first php file test class object
$obj->Print();
$obj1=new Second\test();//second php file test class object
$obj1->display();

function display()
{
    echo "<br>Display from Requiring file";
}
display();
First\display();
?>