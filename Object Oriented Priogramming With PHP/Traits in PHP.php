<?php
trait Cal
{
    public function sum()
    {
        echo "hello world";
    }
}
class demo 
{
    use Cal;
    public function show()
    {
        echo "This is an Example of Trait";
    }
}
class demo1 extends demo
{
    function happy()
    {
        demo::show();
        echo " Hello nepal";
    }
}
$obj=new demo1();
$obj->happy();
?>