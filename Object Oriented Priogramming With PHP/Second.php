<?php
namespace Second;
class test
{
    function display()
    {
        echo "<br>In Second PHP file";
        $obj=new \First\test();
        $obj->Print();//this will allow to execute method from first file's test class
    }
}
?>