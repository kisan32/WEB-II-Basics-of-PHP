<?php
$str="PHP is a very advance programming language";
$validate= preg_match("/PHP/",$str);
if($validate)
{
    echo "Found the Expression";
}
else
{
    echo "not found";
}
?>