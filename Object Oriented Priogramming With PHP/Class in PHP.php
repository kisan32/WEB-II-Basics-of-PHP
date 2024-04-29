<?php
class Concept
{
   public $name="Rejina Bishowkarma";
    function display_Name()
    {
        echo $this->name;
    }
}
$object=new Concept();
$object->display_Name();
?>
